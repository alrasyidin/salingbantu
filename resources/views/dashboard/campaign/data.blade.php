@if (!$campaigns->isEmpty())
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Goals</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campaigns as $nom => $campaign)
        <tr>
            <td data-label="No">{{$nom+1}}</td>
            <td data-label="Title">{{$campaign->title}}</td>
            <td data-label="kategori">{{str_rp($campaign->goals)}}</td>
            <td data-label="Status">{{$campaign->status}}</td>
            <td data-label="Action">
                    <a href="{{url('dashboard/campaign/create').'/'.$campaign->id}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$campaign->id}}')"><i class="fas fa-trash"></i></a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="empty-state" data-height="400" style="height: 400px;">
    <div class="empty-state-icon">
        <i class="fas fa-question"></i>
    </div>
    <h2>We couldn't find any data</h2>
    <p class="lead">
        Sorry we can't find any data, to get rid of this message, make at least 1 entry.
    </p>
    <a href="{{route('create.campaign')}}" class="btn btn-primary mt-4">Create new One</a>
    <a href="#" class="mt-4 bb">Need Help?</a>
</div>
@endif
<div class="float-right">
        {!! $campaigns->render() !!}
</div>
