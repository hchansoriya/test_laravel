@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$hotel->name}}</div>

                {{-- Post Comment --}}
                @if(Auth::check())
                <div class="panel-body">
                    <form action="{{route('addComment')}}" method="post">
                        {{ csrf_field() }} 
                        <input type="hidden" name="hotel_id" value="{{$hotel->id}}"> 
                        <div class="row">                            
                            <div class="form-group col-md-6">
                                <label>Comment</label>
                                <textarea name="comment" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label style="width: 100%">&nbsp;</label>
                                <input type="submit" value="Post Comment">
                            </div>
                        </div>
                    </form>
                </div>
                @endif
                <div class="panel-body">

                </div>
            </div>

            {{-- Comments --}}
            <div class="panel panel-default">
                <div class="panel-heading" style="margin-bottom:10px">Comments</div>

                <div class="panel-body" style="padding: 0px;">
                    @foreach($hotel->comments as $comment)
                        <p style="padding: 10px; border-bottom: 1px solid #ddd;">{{$comment->comment}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
