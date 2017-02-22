@extends('laralum::layouts.master')
@section('icon', 'ion-android-document')
@section('title', __('laralum_pdf::general.generate_pdf'))
@section('subtitle', __('laralum_pdf::general.generate_pdf_desc'))
@section('breadcrumb')
    <ul class="uk-breadcrumb">
        <li><a href="{{ route('laralum::index') }}">@lang('laralum_pdf::general.home')</a></li>
        <li><span>@lang('laralum_pdf::general.generate_pdf')</span></li>
    </ul>
@endsection
@section('content')
    <div class="uk-container uk-container-large">
        <div uk-grid>
            <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
            <div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        @lang('laralum_pdf::general.generate_pdf_desc')
                    </div>
                    <div class="uk-card-body">
                        <form method="POST" action="{{ route('laralum::pdf.show') }}" class="uk-form-stacked">
                            {{ csrf_field() }}
                            <fieldset class="uk-fieldset">
                                <div class="uk-margin">
                                    <label class="uk-form-label">@lang('laralum_pdf::general.text')</label>
                                    <div class="uk-form-controls">
                                        <textarea name="text" class="uk-textarea" rows="5" placeholder="@lang('laralum_pdf::general.text')">{{ old('text') }}</textarea>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <button type="submit" class="uk-button uk-button-primary uk-align-right">
                                        <span class="ion-forward"></span>&nbsp; @lang('laralum_pdf::general.view_pdf')
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
        </div>
    </div>

@endsection
