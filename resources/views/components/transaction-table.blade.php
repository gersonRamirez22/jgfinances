<div class="mt-8 rounded-lg bg-white p-2 shadow-sm">
  <table class="w-full rounded-lg bg-white text-sm">
    <thead class="border-b-2 border-b-black">
      <tr class="text-center text-gray-300">
        <th class="h-5 w-5 px-2.5 py-0.5">
          <div class="flex items-center">
            <input type="checkbox">
          </div>
        </th>
        <th class="font-regular px-2.5 py-2">Date</th>
        <th class="font-regular px-2.5 py-2">Type</th>
        <th class="font-regular px-2.5 py-2">amount</th>
        <th class="font-regular px-2.5 py-2">Account</th>
        <th class="font-regular px-2.5 py-2">category</th>
        <th class="font-regular px-2.5 py-2">Actions</th>
      </tr>
    </thead>
    <tbody class="flex-shrink flex-col text-center">
      <x-transactionitem date="22.08.23" transactionsType="Income" amount="+$5.000" account="Acount 1"
        category="Salary" />
      <x-transactionitem date="22.08.23" transactionsType="Expense" amount="-$2.000" account="Acount 3"
        category="Netflix" />
      <x-transactionitem date="22.08.23" transactionsType="Expense" amount="-$4.000" account="Acount 1"
        category="Spotify" />
      <x-transactionitem date="22.08.23" transactionsType="Income" amount="+$6.000" account="Acount 2"
        category="Salary" />
      <x-transactionitem date="22.08.23" transactionsType="Income" amount="+$5.000" account="Acount 2"
        category="Salary" />
    </tbody>
  </table>
</div>
