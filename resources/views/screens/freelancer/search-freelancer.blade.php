@extends('layouts.master' ,['page_title' => 'Freelancer'])
@section('content')
<section id="profileBanner">
    <h3>Search Freelancer</h3>
</section>
<section id="contactDiv" class="sectionMain padd-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commonDiv">
                    <h3>Search Freelancer</h3>
                    <form action="{{route('search-freelancer')}}" method="post">
                        @csrf
                        <!-- <div class="inputDiv">
                            <label for="">Freelancer</label>
                            <input class="form-control" name="name" id="name" placeholder="Enter Freelancer Name" />
                            <select name="freelancerid" id="freelancerid" required>
                                <option value="">Select Freelancer</option>
                                @foreach($allafreelancermembers as $freelance)
                                <option value="{{$freelance->id}}">{{$freelance->fname .' '.$freelance->lname}}</option>
                                @endforeach
                            </select> 
                        </div>
                        <div class="inputDiv">
                            <label for="">Keywords:</label>
                            <input type="text" class="form-control" name="keyword" id="keyword">
                        </div> -->
                        <div class="inputDiv">
                            <label for="">Source – Language:</label>
                            <select id="slanguages" name="slanguages" class="form-control">
                                <option value="">Source Language</option>
                                <option value="af">Afrikaans</option>
                                <option value="sq">Albanian - shqip</option>
                                <option value="am">Amharic - አማርኛ</option>
                                <option value="ar">Arabic - العربية</option>
                                <option value="an">Aragonese - aragonés</option>
                                <option value="hy">Armenian - հայերեն</option>
                                <option value="ast">Asturian - asturianu</option>
                                <option value="az">Azerbaijani - azərbaycan dili</option>
                                <option value="eu">Basque - euskara</option>
                                <option value="be">Belarusian - беларуская</option>
                                <option value="bn">Bengali - বাংলা</option>
                                <option value="bs">Bosnian - bosanski</option>
                                <option value="br">Breton - brezhoneg</option>
                                <option value="bg">Bulgarian - български</option>
                                <option value="ca">Catalan - català</option>
                                <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                <option value="zh">Chinese - 中文</option>
                                <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                <option value="co">Corsican</option>
                                <option value="hr">Croatian - hrvatski</option>
                                <option value="cs">Czech - čeština</option>
                                <option value="da">Danish - dansk</option>
                                <option value="nl">Dutch - Nederlands</option>
                                <option value="en">English</option>
                                <option value="en-AU">English (Australia)</option>
                                <option value="en-CA">English (Canada)</option>
                                <option value="en-IN">English (India)</option>
                                <option value="en-NZ">English (New Zealand)</option>
                                <option value="en-ZA">English (South Africa)</option>
                                <option value="en-GB">English (United Kingdom)</option>
                                <option value="en-US">English (United States)</option>
                                <option value="eo">Esperanto - esperanto</option>
                                <option value="et">Estonian - eesti</option>
                                <option value="fo">Faroese - føroyskt</option>
                                <option value="fil">Filipino</option>
                                <option value="fi">Finnish - suomi</option>
                                <option value="fr">French - français</option>
                                <option value="fr-CA">French (Canada) - français (Canada)</option>
                                <option value="fr-FR">French (France) - français (France)</option>
                                <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                <option value="gl">Galician - galego</option>
                                <option value="ka">Georgian - ქართული</option>
                                <option value="de">German - Deutsch</option>
                                <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                <option value="el">Greek - Ελληνικά</option>
                                <option value="gn">Guarani</option>
                                <option value="gu">Gujarati - ગુજરાતી</option>
                                <option value="ha">Hausa</option>
                                <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                <option value="he">Hebrew - עברית</option>
                                <option value="hi">Hindi - हिन्दी</option>
                                <option value="hu">Hungarian - magyar</option>
                                <option value="is">Icelandic - íslenska</option>
                                <option value="id">Indonesian - Indonesia</option>
                                <option value="ia">Interlingua</option>
                                <option value="ga">Irish - Gaeilge</option>
                                <option value="it">Italian - italiano</option>
                                <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                <option value="ja">Japanese - 日本語</option>
                                <option value="kn">Kannada - ಕನ್ನಡ</option>
                                <option value="kk">Kazakh - қазақ тілі</option>
                                <option value="km">Khmer - ខ្មែរ</option>
                                <option value="ko">Korean - 한국어</option>
                                <option value="ku">Kurdish - Kurdî</option>
                                <option value="ky">Kyrgyz - кыргызча</option>
                                <option value="lo">Lao - ລາວ</option>
                                <option value="la">Latin</option>
                                <option value="lv">Latvian - latviešu</option>
                                <option value="ln">Lingala - lingála</option>
                                <option value="lt">Lithuanian - lietuvių</option>
                                <option value="mk">Macedonian - македонски</option>
                                <option value="ms">Malay - Bahasa Melayu</option>
                                <option value="ml">Malayalam - മലയാളം</option>
                                <option value="mt">Maltese - Malti</option>
                                <option value="mr">Marathi - मराठी</option>
                                <option value="mn">Mongolian - монгол</option>
                                <option value="ne">Nepali - नेपाली</option>
                                <option value="no">Norwegian - norsk</option>
                                <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                <option value="oc">Occitan</option>
                                <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                <option value="om">Oromo - Oromoo</option>
                                <option value="ps">Pashto - پښتو</option>
                                <option value="fa">Persian - فارسی</option>
                                <option value="pl">Polish - polski</option>
                                <option value="pt">Portuguese - português</option>
                                <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                <option value="qu">Quechua</option>
                                <option value="ro">Romanian - română</option>
                                <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                <option value="rm">Romansh - rumantsch</option>
                                <option value="ru">Russian - русский</option>
                                <option value="gd">Scottish Gaelic</option>
                                <option value="sr">Serbian - српски</option>
                                <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                <option value="sn">Shona - chiShona</option>
                                <option value="sd">Sindhi</option>
                                <option value="si">Sinhala - සිංහල</option>
                                <option value="sk">Slovak - slovenčina</option>
                                <option value="sl">Slovenian - slovenščina</option>
                                <option value="so">Somali - Soomaali</option>
                                <option value="st">Southern Sotho</option>
                                <option value="es">Spanish - español</option>
                                <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                <option value="es-ES">Spanish (Spain) - español (España)</option>
                                <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                <option value="su">Sundanese</option>
                                <option value="sw">Swahili - Kiswahili</option>
                                <option value="sv">Swedish - svenska</option>
                                <option value="tg">Tajik - тоҷикӣ</option>
                                <option value="ta">Tamil - தமிழ்</option>
                                <option value="tt">Tatar</option>
                                <option value="te">Telugu - తెలుగు</option>
                                <option value="th">Thai - ไทย</option>
                                <option value="ti">Tigrinya - ትግርኛ</option>
                                <option value="to">Tongan - lea fakatonga</option>
                                <option value="tr">Turkish - Türkçe</option>
                                <option value="tk">Turkmen</option>
                                <option value="tw">Twi</option>
                                <option value="uk">Ukrainian - українська</option>
                                <option value="ur">Urdu - اردو</option>
                                <option value="ug">Uyghur</option>
                                <option value="uz">Uzbek - o‘zbek</option>
                                <option value="vi">Vietnamese - Tiếng Việt</option>
                                <option value="wa">Walloon - wa</option>
                                <option value="cy">Welsh - Cymraeg</option>
                                <option value="fy">Western Frisian</option>
                                <option value="xh">Xhosa</option>
                                <option value="yi">Yiddish</option>
                                <option value="yo">Yoruba - Èdè Yorùbá</option>
                                <option value="zu">Zulu - isiZulu</option>
                            </select>
                        </div>
                        <div class="inputDiv">
                            <label for=""> Target- Language:</label>
                            <select id="tlanguages" name="tlanguages" class="form-control">
                                <option value="">Target Language</option>
                                <option value="af">Afrikaans</option>
                                <option value="sq">Albanian - shqip</option>
                                <option value="am">Amharic - አማርኛ</option>
                                <option value="ar">Arabic - العربية</option>
                                <option value="an">Aragonese - aragonés</option>
                                <option value="hy">Armenian - հայերեն</option>
                                <option value="ast">Asturian - asturianu</option>
                                <option value="az">Azerbaijani - azərbaycan dili</option>
                                <option value="eu">Basque - euskara</option>
                                <option value="be">Belarusian - беларуская</option>
                                <option value="bn">Bengali - বাংলা</option>
                                <option value="bs">Bosnian - bosanski</option>
                                <option value="br">Breton - brezhoneg</option>
                                <option value="bg">Bulgarian - български</option>
                                <option value="ca">Catalan - català</option>
                                <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                <option value="zh">Chinese - 中文</option>
                                <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                <option value="co">Corsican</option>
                                <option value="hr">Croatian - hrvatski</option>
                                <option value="cs">Czech - čeština</option>
                                <option value="da">Danish - dansk</option>
                                <option value="nl">Dutch - Nederlands</option>
                                <option value="en">English</option>
                                <option value="en-AU">English (Australia)</option>
                                <option value="en-CA">English (Canada)</option>
                                <option value="en-IN">English (India)</option>
                                <option value="en-NZ">English (New Zealand)</option>
                                <option value="en-ZA">English (South Africa)</option>
                                <option value="en-GB">English (United Kingdom)</option>
                                <option value="en-US">English (United States)</option>
                                <option value="eo">Esperanto - esperanto</option>
                                <option value="et">Estonian - eesti</option>
                                <option value="fo">Faroese - føroyskt</option>
                                <option value="fil">Filipino</option>
                                <option value="fi">Finnish - suomi</option>
                                <option value="fr">French - français</option>
                                <option value="fr-CA">French (Canada) - français (Canada)</option>
                                <option value="fr-FR">French (France) - français (France)</option>
                                <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                <option value="gl">Galician - galego</option>
                                <option value="ka">Georgian - ქართული</option>
                                <option value="de">German - Deutsch</option>
                                <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                <option value="el">Greek - Ελληνικά</option>
                                <option value="gn">Guarani</option>
                                <option value="gu">Gujarati - ગુજરાતી</option>
                                <option value="ha">Hausa</option>
                                <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                <option value="he">Hebrew - עברית</option>
                                <option value="hi">Hindi - हिन्दी</option>
                                <option value="hu">Hungarian - magyar</option>
                                <option value="is">Icelandic - íslenska</option>
                                <option value="id">Indonesian - Indonesia</option>
                                <option value="ia">Interlingua</option>
                                <option value="ga">Irish - Gaeilge</option>
                                <option value="it">Italian - italiano</option>
                                <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                <option value="ja">Japanese - 日本語</option>
                                <option value="kn">Kannada - ಕನ್ನಡ</option>
                                <option value="kk">Kazakh - қазақ тілі</option>
                                <option value="km">Khmer - ខ្មែរ</option>
                                <option value="ko">Korean - 한국어</option>
                                <option value="ku">Kurdish - Kurdî</option>
                                <option value="ky">Kyrgyz - кыргызча</option>
                                <option value="lo">Lao - ລາວ</option>
                                <option value="la">Latin</option>
                                <option value="lv">Latvian - latviešu</option>
                                <option value="ln">Lingala - lingála</option>
                                <option value="lt">Lithuanian - lietuvių</option>
                                <option value="mk">Macedonian - македонски</option>
                                <option value="ms">Malay - Bahasa Melayu</option>
                                <option value="ml">Malayalam - മലയാളം</option>
                                <option value="mt">Maltese - Malti</option>
                                <option value="mr">Marathi - मराठी</option>
                                <option value="mn">Mongolian - монгол</option>
                                <option value="ne">Nepali - नेपाली</option>
                                <option value="no">Norwegian - norsk</option>
                                <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                <option value="oc">Occitan</option>
                                <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                <option value="om">Oromo - Oromoo</option>
                                <option value="ps">Pashto - پښتو</option>
                                <option value="fa">Persian - فارسی</option>
                                <option value="pl">Polish - polski</option>
                                <option value="pt">Portuguese - português</option>
                                <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                <option value="qu">Quechua</option>
                                <option value="ro">Romanian - română</option>
                                <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                <option value="rm">Romansh - rumantsch</option>
                                <option value="ru">Russian - русский</option>
                                <option value="gd">Scottish Gaelic</option>
                                <option value="sr">Serbian - српски</option>
                                <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                <option value="sn">Shona - chiShona</option>
                                <option value="sd">Sindhi</option>
                                <option value="si">Sinhala - සිංහල</option>
                                <option value="sk">Slovak - slovenčina</option>
                                <option value="sl">Slovenian - slovenščina</option>
                                <option value="so">Somali - Soomaali</option>
                                <option value="st">Southern Sotho</option>
                                <option value="es">Spanish - español</option>
                                <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                <option value="es-ES">Spanish (Spain) - español (España)</option>
                                <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                <option value="su">Sundanese</option>
                                <option value="sw">Swahili - Kiswahili</option>
                                <option value="sv">Swedish - svenska</option>
                                <option value="tg">Tajik - тоҷикӣ</option>
                                <option value="ta">Tamil - தமிழ்</option>
                                <option value="tt">Tatar</option>
                                <option value="te">Telugu - తెలుగు</option>
                                <option value="th">Thai - ไทย</option>
                                <option value="ti">Tigrinya - ትግርኛ</option>
                                <option value="to">Tongan - lea fakatonga</option>
                                <option value="tr">Turkish - Türkçe</option>
                                <option value="tk">Turkmen</option>
                                <option value="tw">Twi</option>
                                <option value="uk">Ukrainian - українська</option>
                                <option value="ur">Urdu - اردو</option>
                                <option value="ug">Uyghur</option>
                                <option value="uz">Uzbek - o‘zbek</option>
                                <option value="vi">Vietnamese - Tiếng Việt</option>
                                <option value="wa">Walloon - wa</option>
                                <option value="cy">Welsh - Cymraeg</option>
                                <option value="fy">Western Frisian</option>
                                <option value="xh">Xhosa</option>
                                <option value="yi">Yiddish</option>
                                <option value="yo">Yoruba - Èdè Yorùbá</option>
                                <option value="zu">Zulu - isiZulu</option>
                            </select>
                        </div>
                        <!-- <div class="checkboxh ">
                            <input type="checkbox" class="form-check-input" name="last30" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Freelancer profile updated during the last 30 days</label>
                        </div> -->
                        <div class="inputDiv pt-3">
                            <label for="">Location:</label>
                            <select name="country" id="country" class="form-control">
                                <option value="">Select Location</option>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="multiBtn text-center pt-5">
                            <button type="submit" class="agencycommonBtn">Submit</button>
                        </div>
                    </form>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <div class="sectionp ">
                            <p>Total Records: {{count($FreelancerData)}}</p>

                        </div>
                        <thead class="tablehead">
                            <tr>
                                <th scope="col">Select</th>
                                <th scope="col">Freelancer</th>
                                <th scope="col">Location</th>
                                <th scope="col">Last Updated</th>
                                <th scope="col">To Jobs, if any</th>
                                <th scope="col">Send Resume</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($FreelancerData as $freelancer)
                            <tr>
                                <td class="checkbox">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </td>
                                <td class="companyimg">
                                    <a href="{{route('public-profile',$freelancer->id)}}">
                                        <strong>{{$freelancer->fname.' '.$freelancer->lname}}</strong>
                                    </a>
                                    <br>
                                    <img src="@if($freelancer->profile_photo!=null){{asset('/profile-images').'/'.$freelancer->profile_photo}} @else{{'/assets/img/Job Posted.png'}}@endif" alt="" class="img-circle img-responsive " width="60px" height="60px">
                                </td>
                                <td class="location">{{$freelancer->usergeneralinfo->address ?? ''}}</td>
                                <td class="date">
                                    <p>{{date("F-Y", strtotime($freelancer->usergeneralinfo->updated_at ?? ''));}}</p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>

                <section class="orderdisplaying">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="lasttitle"><strong>Order of displaying:</strong> (1) Master membership of agency owners, (2) number of jobs posted on the site by agency owners, (3) translators' rating, and (4) agency name.</p>
                            </div>
                            <div class="col-md-12 pt-4 agencies">
                                <p><strong>To add to the My Agencies List,</strong> check agencies and click or tap the Update. When you send your application to an agency, this agency will be automatically added to your My Agencies List. Please note that the maximum number of agencies in the My Agencies List is 200. To go to the personal list of agencies that helps you keep track of your applications, please click or tap My Agencies List.</p>
                                <div class="form-btn pb-3">
                                    <button type="submit" class="agenciesBtn">Submit</button>
                                </div>
                            </div>



                        </div>

                    </div>
                </section>
                <div class="downloadFile">
                    <p>Download all found records as a CSV file. </p>
                    <button class="commonBtn">Download</button>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="rightDiv">
                    @if($topagency)
                    <div class="lookingFor">
                        <p class="header">AGENCY OF THE DAY
                        </p>
                        <div class="sliderDiv">
                            <div class="profileBox">
                                <img src="@if(isset($topagency->profile_photo) && $topagency->profile_photo!=null){{asset('/profile-images/'.$topagency->profile_photo ?? '')}}@else{{'/assets/img/Job Posted.png'}}@endif" alt="" class="img-fluid">
                                <div class="userDetail ml-2">
                                    <h5>{{$topagency->fname ?? ''}} {{ $topagency->lname ?? ''}}</h5>
                                    <p>Agency</p>
                                </div>
                                <hr>
                                <div class="reviewDiv ml-2">
                                    <p><img src="assets/img/star.png" alt="" class="img-fluid">{{$topagency->totalreview ?? ''}} Reviews ({{$topagency->avgrate ?? ''}})</p>
                                    <p>
                                        <img src="assets/img/arrow.png" alt="" class="img-fluid">
                                        @php
                                        $countryname=\App\Models\Country::where('id',$topagency->country_id)->first();
                                        @endphp
                                        {{$countryname->country_name ?? ''}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>


    </div>
</section>
@endsection