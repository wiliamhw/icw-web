<x-app-layout>
    <div class="md:pb-10 sm:pb-5">
        <div class="px-2 py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <strong>Tabel Sponsor</strong>
                </h3>
            </div>
        </div>

        <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
            <!--Container-->
            <div class="container max-w-7xl mx-auto px-2">
                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="example" class="stripe hover"
                           style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                        <tr>
                            <th data-priority="1">Nama</th>
                            <th data-priority="2">Insittusi</th>
                            <th data-priority="3">Email</th>
                            <th data-priority="4">No.Telpon</th>
                            <th data-priority="5">Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sponsors as $sponsor)
                            <tr>
                                <td>{{ $sponsor->first_name}} {{$sponsor->last_name}}</td>
                                <td>{{ $sponsor->institution }}</td>
                                <td>{{ $sponsor->email }}</td>
                                <td>{{ $sponsor->phone_number}}</td>
                                <td>{{ $sponsor->option }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!--/Card-->
            </div>
            <!--/container-->
        </div>
    </div>
</x-app-layout>