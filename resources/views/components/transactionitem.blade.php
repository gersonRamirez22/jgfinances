<tr>
  <td class="h-5 w-5 px-2.5 py-2">
    <div class="flex items-center">
      <input type="checkbox" class="accent-[#805CFF]">
    </div>
  </td>
  <td class="px-2.5 py-2">{{ $date }}</td>
  <td class="px-2.5 py-2">
    <div>
      <ion-icon class="h-2.5 w-2.5 text-[#17C8AB]" name="ellipse-outline"></ion-icon>
      {{ $transactionsType }}
    </div>
  </td>
  <td class="px-2.5 py-2">{{ $amount }}</td>
  <td class="px-2.5 py-2">{{ $account }}</td>
  <td class="px-2.5 py-2">{{ $category }}</td>
  <td class="px-2.5 py-2 text-2xl">
    <ion-icon class="text-[#FF9900]" name="create-outline"></ion-icon>
    <ion-icon class="text-[#FF5358]" name="trash-outline"></ion-icon>
  </td>
</tr>
