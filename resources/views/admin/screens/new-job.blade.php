@extends('admin.layouts.master' ,['page_title' => 'Jobs'])
@section('content')
<section id="mainSection">
    <div class="multiDiv">
        @include('admin.layouts.sidebar')
        <div class="mainContent" id="postJobDiv">
        <div class="commonDiv">
                    <div class="headingSection">
                        <h3>Add Job</h3>
                    </div>
                    <form action="{{route('post-a-job')}}" method="post">
                        @csrf
                        <div class="inputDiv">
                            <label for="">Job Title <span class="required">*</span></label>
                            <input class="form-control" type="text" name="job_title" id="job_title" placeholder="Job Title" required="required">
                        </div>
                        <div class="inputDiv">
                            <label for="">Job Budget <span class="required">*</span></label>
                            <input class="form-control" type="number" name="job_budget" id="job_budget" placeholder="Budget" required="required">
                        </div>
                        <div class="inputDiv">
                            <label for="">Job Description <span class="required">*</span></label>
                            <textarea class="form-control" name="job_desc" id="job_desc" rows="4" cols="60">
                            </textarea>
                        </div>
                        <div class="languageDiv">
                            <h5>Job Types</h5>
                            <div class="multiple-select">
                                <select name="job_type" class="form-control p-0">
                                    <option value="">Select Service</option>
                                    <option value="Closed captioning">Closed captioning</option>
                                    <option value="Copywriting">Copywriting</option>
                                    <option value="Desktop publishing">Desktop publishing</option>
                                    <option value="Editing">Editing</option>
                                    <option value="Interpreting">Interpreting</option>
                                    <option value="Interpreting ??? conference">Interpreting ??? conference</option>
                                    <option value="Interpreting ??? court/legal">Interpreting ??? court/legal</option>
                                    <option value="Interpreting ??? medical">Interpreting ??? medical</option>
                                    <option value="Interpreting ??? phone">Interpreting ??? phone</option>
                                    <option value="Interpreting ??? sign language">Interpreting ??? sign language</option>
                                    <option value="Localization">Localization</option>
                                    <option value="Other">Other</option>
                                    <option value="Project management">Project management</option>
                                    <option value="Proofreading">Proofreading</option>
                                    <option value="Research">Research</option>
                                    <option value="Subtitling">Subtitling</option>
                                    <option value="Teaching">Teaching</option>
                                    <option value="Technical Review">Technical Review</option>
                                    <option value="Technical writing">Technical writing</option>
                                    <option value="Terminology research">Terminology research</option>
                                    <option value="Transcription">Transcription</option>
                                    <option value="Translation">Translation</option>
                                    <option value="Typesetting"></option>
                                    <option value="Voice-over">Voice-over</option>
                                </select>
                            </div>
                            <div class="radioDiv">
                                <input type="radio" id="Intermediate" name="job_type_level" value="Intermediate">
                                ?? <label for="Intermediate">Intermediate</label>
                                ?? <input type="radio" id="Potential" name="job_type_level" value="Potential">
                                ?? <label for="Potential">Potential</label>
                                ?? <input type="radio" id="In-House" name="job_type_level" value="In-House">
                                ?? <label for="In-House">In-House</label>
                                <input type="radio" id="Tele-Community" name="job_type_level" value="Tele-Community">
                                ?? <label for="Tele-Community">Tele-Community</label>
                            </div>
                            <p><b>Expalanation of Job Types</b></p>
                            <h5>Deadlines</h5>
                            <div class="radioDiv">
                                <input type="radio" id="No-dealine" name="expriy_status" value="0">
                                ?? <label for="No-dealine">No-dealine</label>
                                ?? <input type="radio" id="Set-Date" name="expriy_status" value="1">
                                ?? <label for="Set Date">Set Date</label>
                            </div>
                            <div class="setDateDiv">
                                <input class="form-control" type="date" name="expiry_date" />
                            </div>
                        </div>
                        <div class="languageDiv">
                            <h5>Languages</h5>
                            <p class="warning">At least one language pair is required.</p>
                            <p>Please include both language pairs if you need an interpreter. For example, if you need an English-French interpreter, select English>French
                                and French>English.</p>
                            <div class="multiple-select pairlng">
                                <div class="row">
                                    <div class="col-md-4">
                                        <select class="form-control" id="from_language" name="from_language[]">
                                            <option value="">Select Language</option>
                                            <option value="af">Afrikaans</option>
                                            <option value="sq">Albanian - shqip</option>
                                            <option value="am">Amharic - ????????????</option>
                                            <option value="ar">Arabic - ??????????????</option>
                                            <option value="an">Aragonese - aragon??s</option>
                                            <option value="hy">Armenian - ??????????????</option>
                                            <option value="ast">Asturian - asturianu</option>
                                            <option value="az">Azerbaijani - az??rbaycan dili</option>
                                            <option value="eu">Basque - euskara</option>
                                            <option value="be">Belarusian - ????????????????????</option>
                                            <option value="bn">Bengali - ???????????????</option>
                                            <option value="bs">Bosnian - bosanski</option>
                                            <option value="br">Breton - brezhoneg</option>
                                            <option value="bg">Bulgarian - ??????????????????</option>
                                            <option value="ca">Catalan - catal??</option>
                                            <option value="ckb">Central Kurdish - ?????????? (???????????????? ????????????)</option>
                                            <option value="zh">Chinese - ??????</option>
                                            <option value="zh-HK">Chinese (Hong Kong) - ??????????????????</option>
                                            <option value="zh-CN">Chinese (Simplified) - ??????????????????</option>
                                            <option value="zh-TW">Chinese (Traditional) - ??????????????????</option>
                                            <option value="co">Corsican</option>
                                            <option value="hr">Croatian - hrvatski</option>
                                            <option value="cs">Czech - ??e??tina</option>
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
                                            <option value="fo">Faroese - f??royskt</option>
                                            <option value="fil">Filipino</option>
                                            <option value="fi">Finnish - suomi</option>
                                            <option value="fr">French - fran??ais</option>
                                            <option value="fr-CA">French (Canada) - fran??ais (Canada)</option>
                                            <option value="fr-FR">French (France) - fran??ais (France)</option>
                                            <option value="fr-CH">French (Switzerland) - fran??ais (Suisse)</option>
                                            <option value="gl">Galician - galego</option>
                                            <option value="ka">Georgian - ?????????????????????</option>
                                            <option value="de">German - Deutsch</option>
                                            <option value="de-AT">German (Austria) - Deutsch (??sterreich)</option>
                                            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                            <option value="el">Greek - ????????????????</option>
                                            <option value="gn">Guarani</option>
                                            <option value="gu">Gujarati - ?????????????????????</option>
                                            <option value="ha">Hausa</option>
                                            <option value="haw">Hawaiian - ????lelo Hawai??i</option>
                                            <option value="he">Hebrew - ??????????</option>
                                            <option value="hi">Hindi - ??????????????????</option>
                                            <option value="hu">Hungarian - magyar</option>
                                            <option value="is">Icelandic - ??slenska</option>
                                            <option value="id">Indonesian - Indonesia</option>
                                            <option value="ia">Interlingua</option>
                                            <option value="ga">Irish - Gaeilge</option>
                                            <option value="it">Italian - italiano</option>
                                            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                            <option value="ja">Japanese - ?????????</option>
                                            <option value="kn">Kannada - ???????????????</option>
                                            <option value="kk">Kazakh - ?????????? ????????</option>
                                            <option value="km">Khmer - ???????????????</option>
                                            <option value="ko">Korean - ?????????</option>
                                            <option value="ku">Kurdish - Kurd??</option>
                                            <option value="ky">Kyrgyz - ????????????????</option>
                                            <option value="lo">Lao - ?????????</option>
                                            <option value="la">Latin</option>
                                            <option value="lv">Latvian - latvie??u</option>
                                            <option value="ln">Lingala - ling??la</option>
                                            <option value="lt">Lithuanian - lietuvi??</option>
                                            <option value="mk">Macedonian - ????????????????????</option>
                                            <option value="ms">Malay - Bahasa Melayu</option>
                                            <option value="ml">Malayalam - ??????????????????</option>
                                            <option value="mt">Maltese - Malti</option>
                                            <option value="mr">Marathi - ???????????????</option>
                                            <option value="mn">Mongolian - ????????????</option>
                                            <option value="ne">Nepali - ??????????????????</option>
                                            <option value="no">Norwegian - norsk</option>
                                            <option value="nb">Norwegian Bokm??l - norsk bokm??l</option>
                                            <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                            <option value="oc">Occitan</option>
                                            <option value="or">Oriya - ???????????????</option>
                                            <option value="om">Oromo - Oromoo</option>
                                            <option value="ps">Pashto - ????????</option>
                                            <option value="fa">Persian - ??????????</option>
                                            <option value="pl">Polish - polski</option>
                                            <option value="pt">Portuguese - portugu??s</option>
                                            <option value="pt-BR">Portuguese (Brazil) - portugu??s (Brasil)</option>
                                            <option value="pt-PT">Portuguese (Portugal) - portugu??s (Portugal)</option>
                                            <option value="pa">Punjabi - ??????????????????</option>
                                            <option value="qu">Quechua</option>
                                            <option value="ro">Romanian - rom??n??</option>
                                            <option value="mo">Romanian (Moldova) - rom??n?? (Moldova)</option>
                                            <option value="rm">Romansh - rumantsch</option>
                                            <option value="ru">Russian - ??????????????</option>
                                            <option value="gd">Scottish Gaelic</option>
                                            <option value="sr">Serbian - ????????????</option>
                                            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                            <option value="sn">Shona - chiShona</option>
                                            <option value="sd">Sindhi</option>
                                            <option value="si">Sinhala - ???????????????</option>
                                            <option value="sk">Slovak - sloven??ina</option>
                                            <option value="sl">Slovenian - sloven????ina</option>
                                            <option value="so">Somali - Soomaali</option>
                                            <option value="st">Southern Sotho</option>
                                            <option value="es">Spanish - espa??ol</option>
                                            <option value="es-AR">Spanish (Argentina) - espa??ol (Argentina)</option>
                                            <option value="es-419">Spanish (Latin America) - espa??ol (Latinoam??rica)</option>
                                            <option value="es-MX">Spanish (Mexico) - espa??ol (M??xico)</option>
                                            <option value="es-ES">Spanish (Spain) - espa??ol (Espa??a)</option>
                                            <option value="es-US">Spanish (United States) - espa??ol (Estados Unidos)</option>
                                            <option value="su">Sundanese</option>
                                            <option value="sw">Swahili - Kiswahili</option>
                                            <option value="sv">Swedish - svenska</option>
                                            <option value="tg">Tajik - ????????????</option>
                                            <option value="ta">Tamil - ???????????????</option>
                                            <option value="tt">Tatar</option>
                                            <option value="te">Telugu - ??????????????????</option>
                                            <option value="th">Thai - ?????????</option>
                                            <option value="ti">Tigrinya - ????????????</option>
                                            <option value="to">Tongan - lea fakatonga</option>
                                            <option value="tr">Turkish - T??rk??e</option>
                                            <option value="tk">Turkmen</option>
                                            <option value="tw">Twi</option>
                                            <option value="uk">Ukrainian - ????????????????????</option>
                                            <option value="ur">Urdu - ????????</option>
                                            <option value="ug">Uyghur</option>
                                            <option value="uz">Uzbek - o???zbek</option>
                                            <option value="vi">Vietnamese - Ti???ng Vi???t</option>
                                            <option value="wa">Walloon - wa</option>
                                            <option value="cy">Welsh - Cymraeg</option>
                                            <option value="fy">Western Frisian</option>
                                            <option value="xh">Xhosa</option>
                                            <option value="yi">Yiddish</option>
                                            <option value="yo">Yoruba - ??d?? Yor??b??</option>
                                            <option value="zu">Zulu - isiZulu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <span>>></span>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" id="to_language" name="to_language[]">
                                            <option value="">Select Language</option>
                                            <option value="af">Afrikaans</option>
                                            <option value="sq">Albanian - shqip</option>
                                            <option value="am">Amharic - ????????????</option>
                                            <option value="ar">Arabic - ??????????????</option>
                                            <option value="an">Aragonese - aragon??s</option>
                                            <option value="hy">Armenian - ??????????????</option>
                                            <option value="ast">Asturian - asturianu</option>
                                            <option value="az">Azerbaijani - az??rbaycan dili</option>
                                            <option value="eu">Basque - euskara</option>
                                            <option value="be">Belarusian - ????????????????????</option>
                                            <option value="bn">Bengali - ???????????????</option>
                                            <option value="bs">Bosnian - bosanski</option>
                                            <option value="br">Breton - brezhoneg</option>
                                            <option value="bg">Bulgarian - ??????????????????</option>
                                            <option value="ca">Catalan - catal??</option>
                                            <option value="ckb">Central Kurdish - ?????????? (???????????????? ????????????)</option>
                                            <option value="zh">Chinese - ??????</option>
                                            <option value="zh-HK">Chinese (Hong Kong) - ??????????????????</option>
                                            <option value="zh-CN">Chinese (Simplified) - ??????????????????</option>
                                            <option value="zh-TW">Chinese (Traditional) - ??????????????????</option>
                                            <option value="co">Corsican</option>
                                            <option value="hr">Croatian - hrvatski</option>
                                            <option value="cs">Czech - ??e??tina</option>
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
                                            <option value="fo">Faroese - f??royskt</option>
                                            <option value="fil">Filipino</option>
                                            <option value="fi">Finnish - suomi</option>
                                            <option value="fr">French - fran??ais</option>
                                            <option value="fr-CA">French (Canada) - fran??ais (Canada)</option>
                                            <option value="fr-FR">French (France) - fran??ais (France)</option>
                                            <option value="fr-CH">French (Switzerland) - fran??ais (Suisse)</option>
                                            <option value="gl">Galician - galego</option>
                                            <option value="ka">Georgian - ?????????????????????</option>
                                            <option value="de">German - Deutsch</option>
                                            <option value="de-AT">German (Austria) - Deutsch (??sterreich)</option>
                                            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                            <option value="el">Greek - ????????????????</option>
                                            <option value="gn">Guarani</option>
                                            <option value="gu">Gujarati - ?????????????????????</option>
                                            <option value="ha">Hausa</option>
                                            <option value="haw">Hawaiian - ????lelo Hawai??i</option>
                                            <option value="he">Hebrew - ??????????</option>
                                            <option value="hi">Hindi - ??????????????????</option>
                                            <option value="hu">Hungarian - magyar</option>
                                            <option value="is">Icelandic - ??slenska</option>
                                            <option value="id">Indonesian - Indonesia</option>
                                            <option value="ia">Interlingua</option>
                                            <option value="ga">Irish - Gaeilge</option>
                                            <option value="it">Italian - italiano</option>
                                            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                            <option value="ja">Japanese - ?????????</option>
                                            <option value="kn">Kannada - ???????????????</option>
                                            <option value="kk">Kazakh - ?????????? ????????</option>
                                            <option value="km">Khmer - ???????????????</option>
                                            <option value="ko">Korean - ?????????</option>
                                            <option value="ku">Kurdish - Kurd??</option>
                                            <option value="ky">Kyrgyz - ????????????????</option>
                                            <option value="lo">Lao - ?????????</option>
                                            <option value="la">Latin</option>
                                            <option value="lv">Latvian - latvie??u</option>
                                            <option value="ln">Lingala - ling??la</option>
                                            <option value="lt">Lithuanian - lietuvi??</option>
                                            <option value="mk">Macedonian - ????????????????????</option>
                                            <option value="ms">Malay - Bahasa Melayu</option>
                                            <option value="ml">Malayalam - ??????????????????</option>
                                            <option value="mt">Maltese - Malti</option>
                                            <option value="mr">Marathi - ???????????????</option>
                                            <option value="mn">Mongolian - ????????????</option>
                                            <option value="ne">Nepali - ??????????????????</option>
                                            <option value="no">Norwegian - norsk</option>
                                            <option value="nb">Norwegian Bokm??l - norsk bokm??l</option>
                                            <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                            <option value="oc">Occitan</option>
                                            <option value="or">Oriya - ???????????????</option>
                                            <option value="om">Oromo - Oromoo</option>
                                            <option value="ps">Pashto - ????????</option>
                                            <option value="fa">Persian - ??????????</option>
                                            <option value="pl">Polish - polski</option>
                                            <option value="pt">Portuguese - portugu??s</option>
                                            <option value="pt-BR">Portuguese (Brazil) - portugu??s (Brasil)</option>
                                            <option value="pt-PT">Portuguese (Portugal) - portugu??s (Portugal)</option>
                                            <option value="pa">Punjabi - ??????????????????</option>
                                            <option value="qu">Quechua</option>
                                            <option value="ro">Romanian - rom??n??</option>
                                            <option value="mo">Romanian (Moldova) - rom??n?? (Moldova)</option>
                                            <option value="rm">Romansh - rumantsch</option>
                                            <option value="ru">Russian - ??????????????</option>
                                            <option value="gd">Scottish Gaelic</option>
                                            <option value="sr">Serbian - ????????????</option>
                                            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                            <option value="sn">Shona - chiShona</option>
                                            <option value="sd">Sindhi</option>
                                            <option value="si">Sinhala - ???????????????</option>
                                            <option value="sk">Slovak - sloven??ina</option>
                                            <option value="sl">Slovenian - sloven????ina</option>
                                            <option value="so">Somali - Soomaali</option>
                                            <option value="st">Southern Sotho</option>
                                            <option value="es">Spanish - espa??ol</option>
                                            <option value="es-AR">Spanish (Argentina) - espa??ol (Argentina)</option>
                                            <option value="es-419">Spanish (Latin America) - espa??ol (Latinoam??rica)</option>
                                            <option value="es-MX">Spanish (Mexico) - espa??ol (M??xico)</option>
                                            <option value="es-ES">Spanish (Spain) - espa??ol (Espa??a)</option>
                                            <option value="es-US">Spanish (United States) - espa??ol (Estados Unidos)</option>
                                            <option value="su">Sundanese</option>
                                            <option value="sw">Swahili - Kiswahili</option>
                                            <option value="sv">Swedish - svenska</option>
                                            <option value="tg">Tajik - ????????????</option>
                                            <option value="ta">Tamil - ???????????????</option>
                                            <option value="tt">Tatar</option>
                                            <option value="te">Telugu - ??????????????????</option>
                                            <option value="th">Thai - ?????????</option>
                                            <option value="ti">Tigrinya - ????????????</option>
                                            <option value="to">Tongan - lea fakatonga</option>
                                            <option value="tr">Turkish - T??rk??e</option>
                                            <option value="tk">Turkmen</option>
                                            <option value="tw">Twi</option>
                                            <option value="uk">Ukrainian - ????????????????????</option>
                                            <option value="ur">Urdu - ????????</option>
                                            <option value="ug">Uyghur</option>
                                            <option value="uz">Uzbek - o???zbek</option>
                                            <option value="vi">Vietnamese - Ti???ng Vi???t</option>
                                            <option value="wa">Walloon - wa</option>
                                            <option value="cy">Welsh - Cymraeg</option>
                                            <option value="fy">Western Frisian</option>
                                            <option value="xh">Xhosa</option>
                                            <option value="yi">Yiddish</option>
                                            <option value="yo">Yoruba - ??d?? Yor??b??</option>
                                            <option value="zu">Zulu - isiZulu</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <button type="button" class="commonBtn addpair">Add Language Pair</button>
                        </div>
                        <button type="submit" class="commonBtn">Submit</button>

                    </form>
                </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="freelancerDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Freelancer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you really want to delete this Freelancer
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

@endsection
