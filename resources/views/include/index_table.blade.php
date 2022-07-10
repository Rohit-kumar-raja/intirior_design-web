@php
    $my= DB::table('edges')->where('type','my')->where('status','1')->first();
    $other= DB::table('edges')->where('type','others')->where('status','1')->first();
@endphp
<section class="recently-project-style2-area">
    <div class="container">                
            <p>Competitve Advantages</p>
            <div class="title">Advantages You Get</div>
    <div class="main table table-responsive">
            <table class="price-table">
            <tbody>
                <tr>
                    <td class="price-blank"></td>
                    <td class="price-blank"></td>
                    <td class="price-table-popular"></td>

                </tr>
                <tr class="price-table-head">
                    <td></td>
                    <td>

                        Our experience
                    </td>
                    <td>
                        Typical experience

                    </td>

                </tr>

                <tr>
                    <td><a href="#wordpress-asset-updates" class="price-table-help"></a> PRICE</td>
                    <td>
                        <ul>
                            <li>{{$my->PRICE}}}</li>                            
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>{{$other->PRICE}}</li>
                        </ul>
                    </td>

                </tr>
                <tr>
                    <td><a href="#wordpress-core-updates" class="price-table-help"></a> CONVENIENCE</td>
                    <td>
                        <ul>
                            <li>{{$my->CONVENIENCE}}</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>{{$other->CONVENIENCE}}</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#wordpress-security-monitoring" class="price-table-help"></a> DESIGN</td>
                    <td>
                        <ul>
                            <li>{{$my->DESIGN}}</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>{{$other->DESIGN}}</li>
                        </ul>
                    </td>

                </tr>
                <tr>
                    <td><a href="#wordpress-uptime-monitoring" class="price-table-help"></a> TIMELINES</td>
                    <td>
                        <ul>
                            <li>{{$my->TIMELINES}}</li>
                        </ul>
                    </td>


                    <td>
                        <ul>
                            <li>{{$other->TIMELINES}}</li>
                        </ul>
                    </td>

                </tr>
                <tr>
                    <td><a href="#wordpress-malware-cleanup" class="price-table-help"></a> QUALITY</td>
                    <td>
                        <ul>
                            <li>{{$my->QUALITY}}</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>{{$other->QUALITY}}</li>
                        </ul>
                    </td>

                </tr>
                <tr>
                    <td><a href="#wordpress-security-audit" class="price-table-help"></a> WARRANTY</td>
                    <td>
                        <ul>
                            <li>{{$my->WARRANTY}}</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>{{$other->WARRANTY}}</li>
                        </ul>
                    </td>

                </tr>
                <tr>
                    <td><a href="#wordpress-security-audit" class="price-table-help"></a> AFTER-SALES SUPPORT</td>
                    <td>
                        <ul>
                            <li>{{$my->SUPPORT}}</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>{{$other->SUPPORT}}</li>
                        </ul>
                    </td>

                </tr>

            </tbody>
        </table>
    </div>
</div>
</section>