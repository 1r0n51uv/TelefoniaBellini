<div class="body">
    <div class="table-responsive">
        <table class="table table-hover dashboard-task-infos">
            <thead>
            <tr>

                <th>#</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Google</th>


            </tr>
            </thead>
            <tbody>

            @foreach($users as $usr)


                <tr>

                    <td>{{ $usr->id }}</td>
                    <td>{{ $usr->name }}</td>
                    <td>{{ $usr->surname }}</td>
                    <td>{{ $usr->email }}</td>
                    <td>{{ $usr->fb_id }}</td>
                    <td>{{ $usr->g_id }}</td>

                </tr>

            @endforeach


            </tbody>
        </table>
    </div>
</div>