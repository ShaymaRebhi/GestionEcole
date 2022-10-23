@extends('layouts.mainlayout')
@section('content')
<div class="container-fluid py-4">
@csrf
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Les évenements</h6>
                    </div>
                    <div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre de personnes</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Statut</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lieu</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
        </tr>
      </thead>
      {!! csrf_field() !!}
      <tbody>
      @csrf
      @foreach($events as $event)
        <tr>
          <td>
            <div class="d-flex px-2">
              <div class="my-auto">
                <h6 class="mb-0 text-m">{{$event->nom}}</h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">{{$event->type}}</p>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0"> {{$event->date}}</p>
          </td>
          @php
             $pr = ( ($event->nbPersonnes / $event->nbPersonnesMax) ) * 100;
             $date=  new \DateTime();
             $dt= $date->format('Y-m-d H:i:s');
             $dateEvent=strtotime($event->date);
             $dateToday=strtotime($dt);
          @endphp
          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs"> {{$event->nbPersonnes}}</span>
              <div>
                <div class="progress">
                  <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: {{$pr}}%;"></div>
                </div>
              </div>
            </div>
          </td>
          <td>
            
            @if($event->nbPersonnes < $event->nbPersonnesMax)
            
                         @if($dateEvent > $dateToday)
                                <span class="badge badge-dot me-4">
                                <i class="bg-success"></i>
                                <span class="text-dark text-xs">Encore des places</span>
                                </span>
                         @elseif($dateEvent < $dateToday)
                         <span class="badge badge-dot me-4">
                                <i class="bg-success"></i>
                                <span class="text-dark text-xs">Expiré et incomplet</span>
                                </span>
                         @endif   

         @elseif($event->nbPersonnes == $event->nbPersonnesMax)
             @if($dateEvent < $dateToday)
            <span class="badge badge-dot me-4">
              <i class="bg-info"></i>
              <span class="text-dark text-xs">Complet</span>
            </span>
            
            @elseif($dateEvent > $dateToday)
            <span class="badge badge-dot me-4">
              <i class="bg-info"></i>
              <span class="text-dark text-xs">Expiré et Complet</span>
            </span>
            @endif

          @endif  
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">{{$event->lieu}}</p>
          </td>

          <td>
          <td class="align-middle">
           <a href="{{ route('events.details', $event->id) }}" class="btn btn-primary btn-sm">View</a>
           <a href="{{ route('events.details', $event->id) }}" class="btn btn-warning btn-sm">Edit</a> 
           <form method="POST" action="{{ url('/events' . '/' . $event->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
           </form>                                      
          </td>
        </td>
        </tr>

        @endforeach

      </tbody>
    </table>
  </div>
  </div>
                </div>
            </div>
        </div>
    </div>
@endsection


