@extends('admin.include.layouts')
@section('content')
<div class="pcoded-inner-content">
  <div class="main-body">
      <div class="page-wrapper">
         <div class="page-body">
            <div class="card">
                <div class="card-block">
                    <div class="table-responsive dt-responsive">
                        <table id="data-table" class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Amount</th>
                                <th>Content For IOS</th>
                                <th>Content For Android</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($list as $key => $data)
                                <tr>
                                    <td>{{$list->firstItem() + $key}}</td>
                                    <td>{{$data->amount ?? ''}}</td>
                                    <td>{{Illuminate\Support\Str::limit($data->content, 10, $end='.......')}}</td>
                                    <td>{{Illuminate\Support\Str::limit($data->content_android, 10, $end='.......')}}</td>

                                    <td>
                                        <label class="label {{$data->status == 1 ? 'label-success' : 'label-danger'}}">{{$data->status == 1 ? 'Active' : 'Inactive'}}</label>
                                    </td>

                                    <td>
                                        <a class="btn waves-effect waves-light btn-grd-info" href="{{route('admin.notary.details.view',['id'=>base64_encode($data->id), 'page'=>request('page')])}}" style="padding: 4px;">
                                            <i class="fa fa-eye"></i>  View
                                        </a>
                                        <a class="btn waves-effect waves-light btn-grd-success" href="{{route('admin.notary.details.edit',['id'=>base64_encode($data->id), 'page'=>request('page')])}}" style="padding: 4px;">
                                            <i class="fa fa-pencil-square-o"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                            {{ $list->links() }}
                        </table>
                    </div>
                </div>
            </div>
         </div>
      </div>
  </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#data-table').DataTable({
                "paging": false,
                columnDefs: [
                    { orderable: false, targets: 5 }
                ]
            });
        });

    </script>
@endsection
