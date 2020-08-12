@extends('admin.Adminlayout')
@section('title', 'List Feedback - Admin')
@section('content')

<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Feed Back</h6>
            </div>
            <div class="card-body">
              <table class="table card-text text-center" id="dbtable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Reply</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $feedbacks as $f)
                  <tr>
                    <td class="align-middle">{{$f->id}}</td>
                    <td class="align-middle">{{ $f->feed_name}}</td>
                    <td class="align-middle">{{$f->feed_title}}</td>
                    <td class="align-middle">{{ $f->feed_email}}</td>
                    <td class="align-middle">
                      @if($f->status == 1 )
                      <a href="{{url('/feedback/offStatusFeedback/'.$f->id)}}" class="badge badge-success p-2">Active</a>
                      @else
                      <a href="{{url('/feedback/onStatusFeedback/'.$f->id)}}" class="badge badge-danger p-2">Deactive</a>
                      @endif
                    </td>
                    <td class="align-middle">
                      {{--Reply mail--}}
                      <a href="mailto:{{$f->feed_email}}?subject={{$f->feed_title}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                      {{--Status reply--}}
                      @if($f->reply == 1 )
                      <a href="{{url('/feedback/pendingFeedback/'.$f->id)}}" class="badge badge-success p-2">Done</a>
                      @else
                      <a href="{{url('/feedback/doneFeedback/'.$f->id)}}" class="badge badge-danger p-2">Pending</a>
                      @endif
                    </td>
                    <td class="align-middle">
                      <a href="{{url('/feedback/deleteFeedback/'.$f->id)}}" class="badge badge-danger p-2" onclick="return confirm('Do you want delete ?');"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection 
