@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hotels</div>

                {{-- Hotel Form --}}
                @if(Auth::user()->type == "admin")
                    <div class="panel-body">
                        <form action="{{route('addHotel')}}" method="post">
                            {{ csrf_field() }}  
                            <div class="row">                            
                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label style="width: 100%">&nbsp;</label>
                                    <input type="submit" value="Add Hotel">
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
                {{-- Hotels List --}}
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hotels as $hotel)
                                <tr>
                                    <td><a href="hotels/{{$hotel->id}}">{{$hotel->name}}</a></td>
                                </tr>
                            @endforeach
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
