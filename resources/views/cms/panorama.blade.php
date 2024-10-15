@extends('layouts.adminTemplate')

@section('cmscontent')

<!-- DataTable -->
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

<!-- Content -->
<div class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-md-12">
    <div class="card shadow">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Panorama</h6>
      </div>
      <table class="table table-bordered" id="dataTablePanorama" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center">NO</th>
            <th class="text-center">PICTURE</th>
            <th class="text-center">TITLE</th>
            <th class="text-center">PAGE</th>
            <th class="text-center">START DATE</th>
            <th class="text-center">END DATE</th>
            <th class="text-center">UPDATE DATE</th>
            <th class="text-center">TOOLS</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($panorama as $key => $item)
            <tr>
              <td class="text-center">{{($key+1)}}</td>
              <td class="text-center">&nbsp;</td>
              {{-- <td class="text-center"><img src="{{$item['thumbnail']}}" height="150" width="auto" /></td> --}}
              <td>{{$item['title']}}</td>
              <td class="text-center">{{$item['page']}}</td>
              <td class="text-center">{{$item['startdate']}}</td>
              <td class="text-center">{{$item['enddate']}}</td>
              <td class="text-center">{{$item['updatedate']}}</td>
              <td class="text-center">
                <a href="{{ URL::to('/cms/panorama/modify', [$item['id'], $item['title']['th']]) }}">E</a>
                <a href="{{ URL::to('/cms/panorama/delete', [$item['id'], $item['title']['th']]) }}">D</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- DataTable -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#dataTablePanorama').DataTable();
  });
</script>
@endsection