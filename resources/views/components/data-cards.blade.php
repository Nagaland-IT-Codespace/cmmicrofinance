<div class="col-md-3">
    <section class="card mb-4">
        <div class="card-body bg-primary">
            <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon">
                    <div class="summary-icon">
                        <i class="fas fa-life-ring"></i>
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">Approved applications</h4>
                        <div class="info">
                            <strong class="amount">{{ $approved }}</strong>
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a class="text-uppercase" href="{{ route('applicationForm.index') }}">(view all)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="col-md-3">
    <section class="card mb-4">
        <div class="card-body bg-secondary">
            <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon">
                    <div class="summary-icon">
                        <i class="fas fa-life-ring"></i>
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">Pending applications</h4>
                        <div class="info">
                            <strong class="amount">{{ $pending }}</strong>
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a class="text-uppercase">(view all)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="col-md-3">
    <section class="card mb-4">
        <div class="card-body bg-success">
            <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon">
                    <div class="summary-icon">
                        <i class="fas fa-life-ring"></i>
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">No of schemes </h4>
                        <div class="info">
                            <strong class="amount">{{ $schemes }}</strong>
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a class="text-uppercase" href="{{ route('schemeMaster.index') }}">(view all)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="col-md-3">
    <section class="card mb-4">
        <div class="card-body bg-tertiary">
            <div class="widget-summary">
                <div class="widget-summary-col widget-summary-col-icon">
                    <div class="summary-icon">
                        <i class="fas fa-life-ring"></i>
                    </div>
                </div>
                <div class="widget-summary-col">
                    <div class="summary">
                        <h4 class="title">Amount sanctioned</h4>
                        <div class="info">
                            <strong class="amount">{{ $outlay }}</strong>
                        </div>
                    </div>
                    <div class="summary-footer">
                        <a class="text-uppercase" href="{{ route('applicationForm.index') }}">(view all)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
