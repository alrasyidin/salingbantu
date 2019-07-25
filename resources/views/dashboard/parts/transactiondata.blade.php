@if (!$transactions->isEmpty())
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">INV NO</th>
            <th scope="col">Campaign Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $nom => $transaction)
        <tr>
            <td data-label="No">{{$nom+1}}</td>
            <td data-label="INV NO ">{{$transaction->inv_number}}</td>
            <td data-label="Campaign name ">{{$transaction->campaign->title}}</td>
            <td data-label="kategori">{{str_rp($transaction->amount)}}</td>
            <td data-label="Status">{!!trs_sts($transaction->status)!!}</td>
            <td data-label="Action">
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-envelope"></i> Konfirmasi </a>
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
    {!! $transactions->render() !!}
</div>
