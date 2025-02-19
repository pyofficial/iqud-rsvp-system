<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Attendees</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->date->format('Y-m-d H:i') }}</td>
                            <td>{{ $event->rsvps_count ?? 0 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $events->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>