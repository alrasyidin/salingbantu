@extends('layouts.admin.dashboard')
@section('title','Dashboard')
@section('main-content')
<section class="section">
<div class="section-header">
        <h1>Campaign Saya</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Layout</a></div>
          <div class="breadcrumb-item">Default Layout</div>
        </div>
      </div>

      <div class="section-body">
        <div class="card">
          <div class="card-header">
            <h4>Pilih salah satu campaign Anda</h4> <a href="{{route('create.campaign')}}" class="mr-2 btn btn-primary">Tambahkan Campaign</a>
          </div>
          <div class="card-body">
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Dana Terkumpul</th>
                      <th scope="col">Status</th>
                      <th scope="col"></th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Selamatkan Masa Depan 300 Anak Jalanan Lombok
                        </td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>
                          <a href="#" class="btn btn-info btn-sm" onclick="actControl('form')"><i class="fas fa-edit"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete')"><i class="fas fa-trash"></i></a>
                      </td>

                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Selamatkan Masa Depan 300 Anak Jalanan Lombok
                        </td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td>
                          <a href="#" class="btn btn-info btn-sm" onclick="actControl('form')"><i class="fas fa-edit"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete')"><i class="fas fa-trash"></i></a>
                      </td>

                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Selamatkan Masa Depan 300 Anak Jalanan Lombok
                        </td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                      <td>
                          <a href="#" class="btn btn-info btn-sm" onclick="actControl('form')"><i class="fas fa-edit"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete')"><i class="fas fa-trash"></i></a>
                      </td>

                    </tr>
                  </tbody>
                </table>

                {{-- kalau kosong pake ini
                <div class="empty-state" data-height="400" style="height: 400px;">
                    <div class="empty-state-icon">
                      <i class="fas fa-question"></i>
                    </div>
                    <h2>We couldn't find any data</h2>
                    <p class="lead">
                      Sorry we can't find any data, to get rid of this message, make at least 1 entry.
                    </p>
                    <a href="#" class="btn btn-primary mt-4">Create new One</a>
                    <a href="#" class="mt-4 bb">Need Help?</a>
                  </div> --}}

          <div class="card-footer bg-whitesmoke">
            This is card footer
          </div>
        </div>
      </div>
</section>
@endsection