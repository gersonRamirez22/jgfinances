<div class="  flex flex-col rounded-xl bg-[#FFF] w-52 h-[270px] py-6 px-4 gap-4">
    <div class=" flex flex-col gap-y-2">
        <p class="text-[#D0D0D0] text-sm font-normal">{{$cardTitle}}</p>
        <p class="text-xl font-medium gap-y-2">{{$amount}}</p>
    </div>
    <div>
       <div class="flex justify-between items-center mb-4">
         <p class="font-medium text-sm ">My Accounts</p>
         <ion-icon class="h-5 w-5" name="create-outline"></ion-icon>
       </div>
       <x-individual-account accountName='Account 1' accountAmount='$51.101,13'/>
       <x-individual-account accountName='Account 2' accountAmount='$51.101,13'/>
       <x-individual-account accountName='Account 3' accountAmount='$51.101,13'/>
        <div class="bg-[#805CFF]  flex  justify-center items-center rounded-lg p-2 text-xs text-[#FFF] mt-4">
        <button type="submit" > Create Account</button>
        </div>
    </div>
</div>