<div class="flex h-[270px] w-52 flex-col gap-4 rounded-xl bg-[#FFF] px-4 py-6">
  <div class="flex flex-col gap-y-2">
    <p class="text-sm font-normal text-[#D0D0D0]">{{ $cardTitle }}</p>
    <p class="gap-y-2 text-xl font-medium">{{ $amount }}</p>
  </div>
  <div>
    <div class="mb-4 flex items-center justify-between">
      <p class="text-sm font-medium">My Accounts</p>
      <ion-icon class="h-5 w-5" name="create-outline"></ion-icon>
    </div>
    <x-individual-account accountName='Account 1' accountAmount='$51.101,13' />
    <x-individual-account accountName='Account 2' accountAmount='$51.101,13' />
    <x-individual-account accountName='Account 3' accountAmount='$51.101,13' />
    <div class="mt-4 flex items-center justify-center rounded-lg bg-[#805CFF] p-2 text-xs text-[#FFF]">
      <button type="submit"> Create Account</button>
    </div>
  </div>
</div>
