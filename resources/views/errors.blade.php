@if(count($errors)>0)

        <div class="card">
            <div class="card-body bg-danger text-warning">
                Please complete the following data:
                <ul>
                    @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                    @endforeach

                </ul>

            </div>

        </div>
        @endif