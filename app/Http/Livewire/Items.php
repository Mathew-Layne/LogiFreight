<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use App\Models\Package;
use App\Models\Manifest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Items extends Component
{

    use WithPagination;
    public $addPackage = false;
    public $editPackage =  false;
    public $mailBox, $memberName, $value, $weight, $merchant, $shipper, $trackingNo, $internalTracking, $status, $packageId;


    public function createPackage()
    {
        $mailbox = User::where('mailbox', $this->mailBox)->get();

        if (!$mailbox) {
            $name = explode(" ", $this->memberName);
            $id = User::create([
                'first_nm' => $name[0],
                'last_nm' => $name[1],
                'email' => $name[0] . "_" . $name[1] . "@email.com",
                'password' => Hash::make('password'),
                'trn' => "000-000-000",
                'phone' => "876-111-111",
                'address' => "unknown",
                'mailbox' => $this->mailBox,
                'city' => "unknown",
                'parish' => "unknown",
            ])->id;

            $endDate = date('Y-m-d', (strtotime('Friday')));   
            $manifestID = Manifest::where('end_date', $endDate)->value('id');
            Package::create([
                'user_id' => $id,
                'package_type_id' => 1,
                'manifest_id' => $manifestID,
                'shipper' => $this->shipper,
                'shippers_tracking_no' => $this->trackingNo,
                'estimated_cost' => $this->value,
                'weight' => $this->weight,
                'mailbox' => $this->mailBox,
                'merchant' => $this->merchant,
                'internal_tracking_no' => $this->internalTracking,
                'status' => $this->status,
            ]);
            $manifestCount = Package::where('manifest_id', $manifestID)->count();
            Manifest::where('id', $manifestID)->update([
                'no_of_items' => $manifestCount,
            ]);
        } else {
            $endDate = date('Y-m-d', (strtotime('Friday')));   
            $manifestID = Manifest::where('start_date', $endDate)->value('id');

            Package::create([
                'user_id' => User::where('mailbox', $this->mailBox)->value('id'),
                'package_type_id' => 1,
                'manifest_id' => $manifestID,
                'shipper' => $this->shipper,
                'shippers_tracking_no' => $this->trackingNo,
                'estimated_cost' => $this->value,
                'weight' => $this->weight,
                'mailbox' => $this->mailBox,
                'merchant' => $this->merchant,
                'internal_tracking_no' => $this->internalTracking,
                'status' => $this->status,
            ]);

            $manifestCount = Package::where('manifest_id', $manifestID)->count();
            Manifest::where('id', $manifestID)->update([
                'no_of_items' => $manifestCount,
            ]);

        }
        return redirect()->route('items');
    }

    public function createMailbox()
    {
        $this->mailBox = "LF" . random_int(10002, 99999);
    }

    public function createInternalTracking()
    {
        $this->internalTracking = "ITN-" . Str::random(15);
    }

    public function viewPackage($id)
    {
        $this->editPackage =  true;
        $singlePackage = Package::find($id);
        $user_id = Package::where('id', $id)->value('user_id');
        $first_name = User::where('id', $user_id)->value('first_nm');
        $last_name = User::where('id', $user_id)->value('last_nm');
        $this->shipper = $singlePackage->shipper;
        $this->weight = $singlePackage->weight;
        $this->value = $singlePackage->estimated_cost;
        $this->mailBox = $singlePackage->mailbox;
        $this->merchant = $singlePackage->merchant;
        $this->status = $singlePackage->status;
        $this->internalTracking = $singlePackage->internal_tracking_no;
        $this->trackingNo = $singlePackage->shippers_tracking_no;
        $this->memberName = $first_name . " " . $last_name;
        $this->packageId = $id;
    }

    public function updatePackage()
    {
        Package::where('id', $this->packageId)->update([
            'shipper' => $this->shipper,
            'shippers_tracking_no' => $this->trackingNo,
            'estimated_cost' => $this->value,
            'weight' => $this->weight,
            'mailbox' => $this->mailBox,
            'merchant' => $this->merchant,
            'internal_tracking_no' => $this->internalTracking,
            'status' => $this->status,
        ]);
        return redirect()->route('items');
    }

    public function render()
    {
        $packages =  Package::all();
        return view('livewire.items', [
            'packages' => $packages,
        ]);
    }
}
