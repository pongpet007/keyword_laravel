<div class="card border-left-{{$type}} shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-{{$type}} text-uppercase mb-1">
                    {{$title}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$amount}}</div>
            </div>
            <div class="col-auto">
                <i class="{{ $icon }}"></i>
            </div>
        </div>
    </div>
</div>
