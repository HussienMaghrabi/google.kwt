@extends('admin.layout.forms.add.index')
@section('action' , "ittos")
@section('title' , trans('language.add'))
@section('page-title',trans('language.ittos'))
@section('form-groups')
    @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => trans('language.image'),'name'=>'image', 'max'=>'2'])
    @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('language.name_ar'),'name'=>'name_ar', 'placeholder'=>trans('language.name_ar')])
    @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('language.name_en'),'name'=>'name_en', 'placeholder'=>trans('language.name_en')])

@endsection
@section('submit-button-title' , trans('web.add'))
