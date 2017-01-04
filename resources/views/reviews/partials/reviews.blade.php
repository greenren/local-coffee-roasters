@if (count($reviews))
    @foreach ($reviews as $review)
        <div class="row">
            <div class="col-xs-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $review->user->name }} <span class="pull-right">{{ $review->updated_at->diffForHumans() }}</span>
                    </div>
                    <div class="panel-body">
                        <h3 class="panel-title">{{ $review->title }}</h3>
                        {{ $review->review }}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p>{{ $noReviewsMessage }}</p>
@endif
