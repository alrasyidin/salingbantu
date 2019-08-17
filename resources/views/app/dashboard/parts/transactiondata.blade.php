<table class="table withdraw__table">
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
        @if (!$transactions->isEmpty())
        @foreach ($transactions as $nom => $transaction)
        <tr>
            <td data-label="No">{{$nom+1}}</td>
            <td data-label="INV NO ">{{$transaction->inv_number}}</td>
            <td data-label="Campaign name ">{{$transaction->campaign->title}}</td>
            <td data-label="kategori">{{str_rp($transaction->amount)}}</td>
            <td data-label="Status">{!!trs_sts($transaction->status)!!}</td>
            <td data-label="Action">
                <a href="{{route('confirmpayment',['id' => $transaction->id] ) }}" class="btn btn-danger btn-sm"><i class="fas fa-envelope"></i> Konfirmasi </a>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="6">Tidak terdapat transaksi</td>
        </tr>
        @endif
    </tbody>
</table>

<div class="float-right">
    {!! $transactions->render() !!}
</div>
