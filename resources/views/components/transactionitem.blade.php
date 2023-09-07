<tr>
    <td class="h-5 w-5 py-2 px-2.5">
         <div class="flex items-center">
            <input type="checkbox" class="accent-[#805CFF]">
         </div>
    </td>
    <td class="py-2 px-2.5">{{$date}}</td>
    <td class="py-2 px-2.5 ">
        <div> 
            <ion-icon class=" text-[#17C8AB] w-2.5 h-2.5" name="ellipse-outline"></ion-icon> 
           {{$transactionsType}}
        </div>
    </td>
    <td class="py-2 px-2.5">{{$amount}}</td>
    <td class="py-2 px-2.5">{{$account}}</td>
    <td class="py-2 px-2.5">{{$category}}</td>
    <td class="py-2 px-2.5 text-2xl">
        <ion-icon class="text-[#FF9900]" name="create-outline"></ion-icon>
        <ion-icon class="text-[#FF5358]" name="trash-outline"></ion-icon>
    </td>
</tr>