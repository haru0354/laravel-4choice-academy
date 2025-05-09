<div>
    <h2 class="mb-6 text-2xl font-semibold">{{ $lessonTitle }}の詳細</h2>
    <table class="table-auto w-full text-left">
        <thead>
            <tr>
                <th class="px-4 py-3 font-semibold bg-gray-100">No.</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">問題</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">登録日</th>
                <th class="px-4 py-3 font-semibold bg-gray-100">編集</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drills as $drill)
            <tr>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $drill->id }}</td>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $drill->question }}</td>
                <td class="px-4 py-3 border-t-2 border-gray-200">{{ $drill->created_at }}</td>
                <td class="px-4 py-3 border-t-2 border-gray-200">編集</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>