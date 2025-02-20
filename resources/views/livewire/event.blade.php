<div wire:poll class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="card-title mb-0">Upcoming Events</h5>
                        </div>
                        <div class="col-4 text-end">
                            <i class="feather icon-more-vertical font-20 text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Event Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Attendees</th>
                                    @auth
                                        <th scope="col">RSVP</th>
                                    @endauth
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $event->name }}</td>
                                        <td>{{ $event->date->format('Y-m-d H:i A') }}</td>
                                        <td>{{ $event->users_count ?? 0 }}</td>
                                        @auth
                                            <td>
                                                @if(auth()->user()->events->contains('id', $event->id))
                                                    <a class="btn btn-outline-danger" href="{{ route('detach', ['id' => $event->id]) }}" role="button">Leave</a>
                                                    {{--<a class="btn btn-outline-danger" wire:click="$emit('leaveEvent', $event->id)" role="button">Leave</a>--}}
                                                @else
                                                    <a class="btn btn-outline-primary" href="{{ route('attach', ['id' => $event->id]) }}" role="button">Participate</a>
                                                    {{--<a class="btn btn-outline-primary" wire:click="$emit('addEvent', $event->id)" role="button">Participate</a>--}}
                                                @endif
                                            </td>
                                        @endauth
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $events->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>