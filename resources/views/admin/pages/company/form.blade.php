<x-admin.layout>
    {{-- Meta tag --}}
    @push('metatag')
        <meta name="description" content="">
        <meta name="author" content="">
        <title></title>
    @endpush
    {{-- =========================================================================================================== --}}
    {{-- Breadcrumb --}}
    @push('breadcrumb')
        <div class=" mb-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Company {{ $method }} </li>
                </ol>
            </nav>
        </div>
    @endpush
    {{-- =========================================================================================================== --}}
    {{-- Css Other --}}
    @push('cssother')

    @endpush
    {{-- =========================================================================================================== --}}
    {{-- Modal --}}
    @push('modals')

    @endpush
    {{-- =========================================================================================================== --}}
    {{-- Script Other --}}
    @push('scriptother')

    @endpush
    {{-- =========================================================================================================== --}}

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ strtolower($method) == 'add' ? url('User') : url("User/$company->com_id") }}"
                method="POST">
                @csrf

                @if (strtolower($method) == 'add')
                    @method("POST")
                @else
                    @method("PATCH")
                @endif

                <div class="card ">
                    <div class="card-header bg-info text-white">
                        Company
                    </div>
                    <div class="card-body">
                        @if ($errors->any())

                            <div class="row mb-3">
                                <div class="col-xl-2 text-right pt-2"></div>
                                <div class="col-xl-4">
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h6>Error list :</h6>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        @endif

                        <div class="row">
                            <div class="col-xl-6">
                                <form method="POST" action="{{ url("Company/$company->com_id") }}">
                                    @csrf
                                    @method("PATCH")
                                    <h4>Profile</h4>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="picture-tab" data-toggle="tab"
                                                href="#picture" role="tab" aria-controls="picture"
                                                aria-selected="true">picture</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active p-3 " id="picture" role="tabpanel"
                                            aria-labelledby="picture-tab">
                                            <div class="row form-group">

                                                <div class="col-xl-12">
                                                    @php
                                                        $filepath = '../images/icon.png';
                                                    @endphp
                                                    Icon : <br><input type="file" name="logo" id="logo" />
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xl-12">
                                                    @php
                                                        $filepath = '../images/logo/logo.png';
                                                    @endphp
                                                    Logo แบบ
                                                    แบบสี่เหลี่ยม : <br><input type="file" name="logo" id="logo" />
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xl-12">
                                                    @php
                                                        $filepath = '../images/logo/logo' . $company->com_id . 'long.jpg';
                                                    @endphp
                                                    Logo แบบยาว :<br><input type="file" name="logo" id="logo" />

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xl-12">
                                                    @php
                                                        $filepath = '../images/qrcode.png';
                                                    @endphp
                                                    QR code : <br><input type="file" name="logo" id="logo" />
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xl-12">
                                                    @php
                                                        $filepath = '../images/map/' . $company->com_id . '.jpg';
                                                    @endphp
                                                    Map : <br><input type="file" name="logo" id="logo" />

                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-xl-12">
                                                    @php
                                                        $filepath = '../images/product-banner.jpg';
                                                    @endphp
                                                    Product-banner : <br><input type="file" name="logo" id="logo" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade p-3" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div id="recent" class="tab-pane active">
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">เบอร์ติดต่อ
                                                        : </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="com_phone"
                                                            value="+66 38 206 467, +66 80 691 1234"
                                                            class="form-control" id="com_phone"
                                                            placeholder="com_phone">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">สายด่วน :
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="hotline" value="+66 38 206 467"
                                                            class="form-control" id="hotline" placeholder="hotline">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">เบอร์มือถือ
                                                        : </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="com_telephone" value="+66 80 691 1234"
                                                            class="form-control" id="com_telephone"
                                                            placeholder="com_telephone">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">แฟกซ์:
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="com_fax" value="+66 38 206 467"
                                                            class="form-control" id="com_fax" placeholder="com_fax">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">เมล:
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="com_email" value="center@nutcon.co.th"
                                                            class="form-control" id="com_email"
                                                            placeholder="com_email">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">เว็บไซต์:
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="website"
                                                            value="https://nutcons.com,https://nutcon.pagesthai.com,https://www.nutcongroup.com"
                                                            class="form-control" id="website" placeholder="website">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">facebook:
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="facebook"
                                                            value="https://www.facebook.com/Nutcongroup/"
                                                            class="form-control" id="facebook" placeholder="facebook">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">facebook
                                                        messenger link: </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="facebook_messenger_link" value=""
                                                            class="form-control" id="facebook_messenger_link"
                                                            placeholder="facebook_messenger_link">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">youtube:
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="youtube"
                                                            value="https://www.youtube.com/channel/UC-SDrz2xebsBI3ahnEIltrQ"
                                                            class="form-control" id="youtube" placeholder="youtube">
                                                    </div>
                                                </div>


                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">Line :
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="line_id" value="nutcongroup"
                                                            class="form-control" id="line_id" placeholder="line_id">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">facebook
                                                        fanpage: </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="facebook_fanpage_id"
                                                            value="https://www.facebook.com/Nutcongroup/"
                                                            class="form-control" id="facebook_fanpage_id"
                                                            placeholder="facebook fanpage">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">facebook
                                                        id: </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="facebookid"
                                                            value="https://www.facebook.com/Nutcongroup/"
                                                            class="form-control" id="facebookid"
                                                            placeholder="facebook id">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">twitter:
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="twitter" value=""
                                                            class="form-control" id="twitter" placeholder="twitter">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">instagram:
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="instagram"
                                                            value="https://www.instagram.com/nutcongroup/"
                                                            class="form-control" id="instagram"
                                                            placeholder="instagram">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">tiktok:
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="tiktok"
                                                            value="https://vt.tiktok.com/ZSey6S94T/"
                                                            class="form-control" id="tiktok" placeholder="tiktok">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">Google
                                                        Analytics: </label>
                                                    <div class="col-xl-9">
                                                        <textarea name="google_anlytic" cols="40" rows="10"
                                                            class="form-control" id="google_anlytic"
                                                            placeholder="google_anlytic"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="control-label col-md-2 col-xl-3 col-xs-12" for="first-name">
                                            </label>
                                            <div class="col-md-6 ">
                                                <input type="hidden" name="com_id" id="com_id" value="1">
                                                <input type="submit" name="btn_send" value="SAVE"
                                                    class="btn btn-primary" id="btn_send">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-6">
                                <h4>Language</h4>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @foreach ($countrys as $country)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link {{ $country->country_id == 221 ? 'active' : '' }}"
                                                id="language{{ $country->country_id }}-tab" data-toggle="tab"
                                                href="#language{{ $country->country_id }}" role="tab"
                                                aria-controls="language{{ $country->country_id }}"
                                                aria-selected="true">{{ $country->short_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    @foreach ($countrys as $country)
                                        <div class="tab-pane fade p-3 show {{ $country->country_id == 221 ? 'active' : '' }}"
                                            id="language{{ $country->country_id }}" role="tabpanel"
                                            aria-labelledby="language{{ $country->country_id }}-tab">
                                            <form action="" method="POST">
                                                @csrf
                                                @method("PATCH")
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">title {{$country->iso2}} : </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="meta_title" value=""
                                                            class="form-control" id="meta_title"
                                                            placeholder="title {{$country->iso2}}">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label
                                                        class="col-xl-3 control-label text-sm-right pt-2">meta keyword {{$country->iso2}}
                                                        : </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="meta_keyword" value=""
                                                            class="form-control" id="meta_keyword"
                                                            placeholder="meta keyword {{$country->iso2}}">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label
                                                        class="col-xl-3 control-label text-sm-right pt-2">meta description {{$country->iso2}}
                                                        : </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="meta_description" value=""
                                                            class="form-control" id="meta_description"
                                                            placeholder="meta description {{$country->iso2}}">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">com name {{$country->iso2}} :
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <input type="text" name="com_name" value=""
                                                            class="form-control" id="com_name"
                                                            placeholder="com name {{$country->iso2}} ">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label
                                                        class="col-xl-3 control-label text-sm-right pt-2">com_address {{$country->iso2}}:
                                                    </label>
                                                    <div class="col-xl-9">
                                                        <textarea name="com_address" cols="40" rows="2"
                                                            class="form-control" id="com_address"
                                                            placeholder="com_address {{$country->iso2}}"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <label class="col-xl-3 control-label text-sm-right pt-2">Business Hours {{$country->iso2}}: </label>
                                                    <div class="col-xl-9">
                                                        <textarea name="business_hours" cols="40" rows="2"
                                                            class="form-control" id="business_hours"
                                                            placeholder="Business Hours {{$country->iso2}}"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <label
                                                        class="col-xl-3 control-label text-sm-right pt-2">desc short {{$country->iso2}}
                                                        : </label>
                                                    <div class="col-xl-9">
                                                        <textarea name="com_desc_short" cols="40" rows="2"
                                                            class="form-control" id="com_desc_short"
                                                            placeholder="desc short {{$country->iso2}}"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" for=""></label>
                                                    <div class="col-md-10 ">
                                                        <input type="hidden" id="company_language_id"
                                                            name="company_language_id" value="3">
                                                        <input type="hidden" id="languagemethod" name="languagemethod"
                                                            value="edit">
                                                        <button type="button"  class="btn btn-primary">Save</button>

                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>

</x-admin.layout>
