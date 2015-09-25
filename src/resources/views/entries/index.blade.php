@extends('firo::default')

@section('content')
    <div class="c-box">
        <h2 class="u-mb- u-normal">Create taxonomy</h2>
        <div class="o-split o-split--table">
            <div class="u-pr--">
                <input class="c-input u-1/1" type="text" placeholder="Taxonomy name">
            </div>
            <div class="u-pr--">
                <input class="c-input u-1/1" type="text" placeholder="Taxonomy slug">
            </div>
            <div class="u-pr--">
                <div class="c-select u-1/1">
                    <select name="">
                        <option>Use preset?</option>
                    </select>
                </div>
            </div>
            <div>
                <button type="submit" class="c-btn c-btn--primary u-1/1">Create</button>
            </div>
        </div>
    </div>
    <!-- /.c-box -->

    <div class="c-box u-mt">
        <h2 class="u-mb- u-normal">Taxonomies</h2>

        <ul class="c-list u-milli">
            @if($taxonomies)
                @each('firo::entries.taxonomy', $taxonomies, 'taxonomy')
            @else
                <p>
                    Looks like you do not have any active taxonomies.
                    At least one is needed before you start creating entries.
                </p>

                <a class="c-btn c-btn--positive c-btn--large u-mt" href="{{ route('firo.taxonomies') }}">
                    <i class="fa fa-plus u-mr--"></i>Create taxonomy
                </a>
            @endif
        </ul>
        <!-- /.o-item-list -->
    </div>
    <!-- /.c-box -->
@stop