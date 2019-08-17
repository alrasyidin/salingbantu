<div class="table-responsive">
    <table class="table withdraw__table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Goals</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @if (!$campaigns->isEmpty())
        @foreach ($campaigns as $nom => $campaign)
        <tr>
            <td data-label="No">{{$nom+1}}</td>
            <td data-label="Title">{{$campaign->title}}</td>
            <td data-label="kategori">{{str_rp($campaign->goals)}}</td>
            <td data-label="Status">{{$campaign->status}}</td>
            <td data-label="Action">
                    <a href="{{url('/campaign').'/'.$campaign->slug}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="{{url('dashboard/campaign/create').'/'.$campaign->slug}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$campaign->id}}')"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    @else
    <tr>
        <td colspan="5">Data tidak tersedia</td>
    </tr>
    @endif
    </tbody>
</table>

<div class="mt-3">
        {!! $campaigns->render() !!}
</div>
</div>
