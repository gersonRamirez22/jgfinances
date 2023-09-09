<div class="bg-white p-2 mt-8 rounded-lg shadow-sm">
    <table class="rounded-lg text-sm w-full bg-white">
        <thead class="border-b-2 border-b-black">
            <tr class="text-center text-gray-300">
                <th class="h-5 w-5 py-0.5 px-2.5">
                    <div class="flex items-center">
                        <input type="checkbox">
                    </div>
                </th>
                <th class="px-2.5 py-2 font-regular">Date</th>
                <th class="px-2.5 py-2 font-regular">Type</th>
                <th class="px-2.5 py-2 font-regular">amount</th>
                <th class="px-2.5 py-2 font-regular">Account</th>
                <th class="px-2.5 py-2 font-regular">category</th>
                <th class="px-2.5 py-2 font-regular">Actions</th>
            </tr>
        </thead>
        <tbody class="text-center flex-shrink flex-col">
            <x-transactionitem date="22.08.23" transactionsType="Income" amount="+$5.000" account="Acount 1" category="Salary" />
            <x-transactionitem date="22.08.23" transactionsType="Expense" amount="-$2.000" account="Acount 3" category="Netflix" />
            <x-transactionitem date="22.08.23" transactionsType="Expense" amount="-$4.000" account="Acount 1" category="Spotify" />
            <x-transactionitem date="22.08.23" transactionsType="Income" amount="+$6.000" account="Acount 2" category="Salary" />
            <x-transactionitem date="22.08.23" transactionsType="Income" amount="+$5.000" account="Acount 2" category="Salary" />
        </tbody>
    </table>
</div>