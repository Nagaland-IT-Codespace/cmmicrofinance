{{-- set bootstrap column from size --}}
@php
    $col = 4;
@endphp
@foreach ($data as $item)
    <div class="col-md-{{ $col }} drag">
        <section class="card mb-4 " >
            <div class="card-body bg-{{ $item['color'] }}">
                <div class="widget-summary">
                    <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon">
                            {{-- random fas icon --}}
                            <i class="fas fa-{{ $item['icon'] }}"></i>
                        </div>
                    </div>
                    <div class="widget-summary-col">
                        <div class="summary">
                            <h4 class="title">{{ $item['title'] }}</h4>
                            <div class="info">
                                <strong class="amount">{{ $item['count'] }}</strong>
                            </div>
                        </div>
                        <div class="summary-footer">
                            <a class="text-uppercase" href="{{ route($item['link']) }}">(view all)</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endforeach
