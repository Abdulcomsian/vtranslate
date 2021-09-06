<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('countries')->delete();
         // All countries
        $countries = array(
            array('country_code' => 'AF', 'country_name' => 'Afghanistan','phone_code' => 93),
            array('country_code' => 'AX', 'country_name' => 'Aland Islands','phone_code' => 358),
            array('country_code' => 'AL', 'country_name' => 'Albania','phone_code' => 355),
            array('country_code' => 'DZ', 'country_name' => 'Algeria','phone_code' => 213),
            array('country_code' => 'AS', 'country_name' => 'American Samoa','phone_code' => 1684),
            array('country_code' => 'AD', 'country_name' => 'Andorra','phone_code' => 376),
            array('country_code' => 'AO', 'country_name' => 'Angola','phone_code' => 244),
            array('country_code' => 'AI', 'country_name' => 'Anguilla','phone_code' => 1264),
            array('country_code' => 'AQ', 'country_name' => 'Antarctica','phone_code' => 672),
            array('country_code' => 'AG', 'country_name' => 'Antigua and Barbuda','phone_code' => 1268),
            array('country_code' => 'AR', 'country_name' => 'Argentina','phone_code' => 54),
            array('country_code' => 'AM', 'country_name' => 'Armenia','phone_code' => 374),
            array('country_code' => 'AW', 'country_name' => 'Aruba','phone_code' => 297),
            array('country_code' => 'AU', 'country_name' => 'Australia','phone_code' => 61),
            array('country_code' => 'AT', 'country_name' => 'Austria','phone_code' => 43),
            array('country_code' => 'AZ', 'country_name' => 'Azerbaijan','phone_code' => 994),
            array('country_code' => 'BS', 'country_name' => 'Bahamas','phone_code' => 1242),
            array('country_code' => 'BH', 'country_name' => 'Bahrain','phone_code' => 973),
            array('country_code' => 'BD', 'country_name' => 'Bangladesh','phone_code' => 880),
            array('country_code' => 'BB', 'country_name' => 'Barbados','phone_code' => 1246),
            array('country_code' => 'BY', 'country_name' => 'Belarus','phone_code' => 375),
            array('country_code' => 'BE', 'country_name' => 'Belgium','phone_code' => 32),
            array('country_code' => 'BZ', 'country_name' => 'Belize','phone_code' => 501),
            array('country_code' => 'BJ', 'country_name' => 'Benin','phone_code' => 229),
            array('country_code' => 'BM', 'country_name' => 'Bermuda','phone_code' => 1441),
            array('country_code' => 'BT', 'country_name' => 'Bhutan','phone_code' => 975),
            array('country_code' => 'BO', 'country_name' => 'Bolivia','phone_code' => 591),
            array('country_code' => 'BQ', 'country_name' => 'Bonaire, Sint Eustatius and Saba','phone_code' => 599),
            array('country_code' => 'BA', 'country_name' => 'Bosnia and Herzegovina','phone_code' => 387),
            array('country_code' => 'BW', 'country_name' => 'Botswana','phone_code' => 267),
            array('country_code' => 'BV', 'country_name' => 'Bouvet Island','phone_code' => 55),
            array('country_code' => 'BR', 'country_name' => 'Brazil','phone_code' => 55),
            array('country_code' => 'IO', 'country_name' => 'British Indian Ocean Territory','phone_code' => 246),
            array('country_code' => 'BN', 'country_name' => 'Brunei Darussalam','phone_code' => 673),
            array('country_code' => 'BG', 'country_name' => 'Bulgaria','phone_code' => 359),
            array('country_code' => 'BF', 'country_name' => 'Burkina Faso','phone_code' => 226),
            array('country_code' => 'BI', 'country_name' => 'Burundi','phone_code' => 257),
            array('country_code' => 'KH', 'country_name' => 'Cambodia','phone_code' => 855),
            array('country_code' => 'CM', 'country_name' => 'Cameroon','phone_code' => 237),
            array('country_code' => 'CA', 'country_name' => 'Canada','phone_code' => 1),
            array('country_code' => 'CV', 'country_name' => 'Cape Verde','phone_code' => 238),
            array('country_code' => 'KY', 'country_name' => 'Cayman Islands','phone_code' => 1345),
            array('country_code' => 'CF', 'country_name' => 'Central African Republic','phone_code' => 236),
            array('country_code' => 'TD', 'country_name' => 'Chad','phone_code' => 235),
            array('country_code' => 'CL', 'country_name' => 'Chile','phone_code' => 56),
            array('country_code' => 'CN', 'country_name' => 'China','phone_code' => 86),
            array('country_code' => 'CX', 'country_name' => 'Christmas Island','phone_code' => 61),
            array('country_code' => 'CC', 'country_name' => 'Cocos (Keeling) Islands','phone_code' => 672),
            array('country_code' => 'CO', 'country_name' => 'Colombia','phone_code' => 57),
            array('country_code' => 'KM', 'country_name' => 'Comoros','phone_code' => 269),
            array('country_code' => 'CG', 'country_name' => 'Congo','phone_code' => 242),
            array('country_code' => 'CD', 'country_name' => 'Congo, Democratic Republic of the Congo','phone_code' => 242),
            array('country_code' => 'CK', 'country_name' => 'Cook Islands','phone_code' => 682),
            array('country_code' => 'CR', 'country_name' => 'Costa Rica','phone_code' => 506),
            array('country_code' => 'CI', 'country_name' => "Cote D'Ivoire",'phone_code' => 225),
            array('country_code' => 'HR', 'country_name' => 'Croatia','phone_code' => 385),
            array('country_code' => 'CU', 'country_name' => 'Cuba','phone_code' => 53),
            array('country_code' => 'CW', 'country_name' => 'Curacao','phone_code' => 599),
            array('country_code' => 'CY', 'country_name' => 'Cyprus','phone_code' => 357),
            array('country_code' => 'CZ', 'country_name' => 'Czech Republic','phone_code' => 420),
            array('country_code' => 'DK', 'country_name' => 'Denmark','phone_code' => 45),
            array('country_code' => 'DJ', 'country_name' => 'Djibouti','phone_code' => 253),
            array('country_code' => 'DM', 'country_name' => 'Dominica','phone_code' => 1767),
            array('country_code' => 'DO', 'country_name' => 'Dominican Republic','phone_code' => 1809),
            array('country_code' => 'EC', 'country_name' => 'Ecuador','phone_code' => 593),
            array('country_code' => 'EG', 'country_name' => 'Egypt','phone_code' => 20),
            array('country_code' => 'SV', 'country_name' => 'El Salvador','phone_code' => 503),
            array('country_code' => 'GQ', 'country_name' => 'Equatorial Guinea','phone_code' => 240),
            array('country_code' => 'ER', 'country_name' => 'Eritrea','phone_code' => 291),
            array('country_code' => 'EE', 'country_name' => 'Estonia','phone_code' => 372),
            array('country_code' => 'ET', 'country_name' => 'Ethiopia','phone_code' => 251),
            array('country_code' => 'FK', 'country_name' => 'Falkland Islands (Malvinas)','phone_code' => 500),
            array('country_code' => 'FO', 'country_name' => 'Faroe Islands','phone_code' => 298),
            array('country_code' => 'FJ', 'country_name' => 'Fiji','phone_code' => 679),
            array('country_code' => 'FI', 'country_name' => 'Finland','phone_code' => 358),
            array('country_code' => 'FR', 'country_name' => 'France','phone_code' => 33),
            array('country_code' => 'GF', 'country_name' => 'French Guiana','phone_code' => 594),
            array('country_code' => 'PF', 'country_name' => 'French Polynesia','phone_code' => 689),
            array('country_code' => 'TF', 'country_name' => 'French Southern Territories','phone_code' => 262),
            array('country_code' => 'GA', 'country_name' => 'Gabon','phone_code' => 241),
            array('country_code' => 'GM', 'country_name' => 'Gambia','phone_code' => 220),
            array('country_code' => 'GE', 'country_name' => 'Georgia','phone_code' => 995),
            array('country_code' => 'DE', 'country_name' => 'Germany','phone_code' => 49),
            array('country_code' => 'GH', 'country_name' => 'Ghana','phone_code' => 233),
            array('country_code' => 'GI', 'country_name' => 'Gibraltar','phone_code' => 350),
            array('country_code' => 'GR', 'country_name' => 'Greece','phone_code' => 30),
            array('country_code' => 'GL', 'country_name' => 'Greenland','phone_code' => 299),
            array('country_code' => 'GD', 'country_name' => 'Grenada','phone_code' => 1473),
            array('country_code' => 'GP', 'country_name' => 'Guadeloupe','phone_code' => 590),
            array('country_code' => 'GU', 'country_name' => 'Guam','phone_code' => 1671),
            array('country_code' => 'GT', 'country_name' => 'Guatemala','phone_code' => 502),
            array('country_code' => 'GG', 'country_name' => 'Guernsey','phone_code' => 44),
            array('country_code' => 'GN', 'country_name' => 'Guinea','phone_code' => 224),
            array('country_code' => 'GW', 'country_name' => 'Guinea-Bissau','phone_code' => 245),
            array('country_code' => 'GY', 'country_name' => 'Guyana','phone_code' => 592),
            array('country_code' => 'HT', 'country_name' => 'Haiti','phone_code' => 509),
            array('country_code' => 'HM', 'country_name' => 'Heard Island and Mcdonald Islands','phone_code' => 0),
            array('country_code' => 'VA', 'country_name' => 'Holy See (Vatican City State)','phone_code' => 39),
            array('country_code' => 'HN', 'country_name' => 'Honduras','phone_code' => 504),
            array('country_code' => 'HK', 'country_name' => 'Hong Kong','phone_code' => 852),
            array('country_code' => 'HU', 'country_name' => 'Hungary','phone_code' => 36),
            array('country_code' => 'IS', 'country_name' => 'Iceland','phone_code' => 354),
            array('country_code' => 'IN', 'country_name' => 'India','phone_code' => 91),
            array('country_code' => 'ID', 'country_name' => 'Indonesia','phone_code' => 62),
            array('country_code' => 'IR', 'country_name' => 'Iran, Islamic Republic of','phone_code' => 98),
            array('country_code' => 'IQ', 'country_name' => 'Iraq','phone_code' => 964),
            array('country_code' => 'IE', 'country_name' => 'Ireland','phone_code' => 353),
            array('country_code' => 'IM', 'country_name' => 'Isle of Man','phone_code' => 44),
            array('country_code' => 'IL', 'country_name' => 'Israel','phone_code' => 972),
            array('country_code' => 'IT', 'country_name' => 'Italy','phone_code' => 39),
            array('country_code' => 'JM', 'country_name' => 'Jamaica','phone_code' => 1876),
            array('country_code' => 'JP', 'country_name' => 'Japan','phone_code' => 81),
            array('country_code' => 'JE', 'country_name' => 'Jersey','phone_code' => 44),
            array('country_code' => 'JO', 'country_name' => 'Jordan','phone_code' => 962),
            array('country_code' => 'KZ', 'country_name' => 'Kazakhstan','phone_code' => 7),
            array('country_code' => 'KE', 'country_name' => 'Kenya','phone_code' => 254),
            array('country_code' => 'KI', 'country_name' => 'Kiribati','phone_code' => 686),
            array('country_code' => 'KP', 'country_name' => "Korea, Democratic People's Republic of",'phone_code' => 850),
            array('country_code' => 'KR', 'country_name' => 'Korea, Republic of','phone_code' => 82),
            array('country_code' => 'XK', 'country_name' => 'Kosovo','phone_code' => 381),
            array('country_code' => 'KW', 'country_name' => 'Kuwait','phone_code' => 965),
            array('country_code' => 'KG', 'country_name' => 'Kyrgyzstan','phone_code' => 996),
            array('country_code' => 'LA', 'country_name' => "Lao People's Democratic Republic",'phone_code' => 856),
            array('country_code' => 'LV', 'country_name' => 'Latvia','phone_code' => 371),
            array('country_code' => 'LB', 'country_name' => 'Lebanon','phone_code' => 961),
            array('country_code' => 'LS', 'country_name' => 'Lesotho','phone_code' => 266),
            array('country_code' => 'LR', 'country_name' => 'Liberia','phone_code' => 231),
            array('country_code' => 'LY', 'country_name' => 'Libyan Arab Jamahiriya','phone_code' => 218),
            array('country_code' => 'LI', 'country_name' => 'Liechtenstein','phone_code' => 423),
            array('country_code' => 'LT', 'country_name' => 'Lithuania','phone_code' => 370),
            array('country_code' => 'LU', 'country_name' => 'Luxembourg','phone_code' => 352),
            array('country_code' => 'MO', 'country_name' => 'Macao','phone_code' => 853),
            array('country_code' => 'MK', 'country_name' => 'Macedonia, the Former Yugoslav Republic of','phone_code' => 389),
            array('country_code' => 'MG', 'country_name' => 'Madagascar','phone_code' => 261),
            array('country_code' => 'MW', 'country_name' => 'Malawi','phone_code' => 265),
            array('country_code' => 'MY', 'country_name' => 'Malaysia','phone_code' => 60),
            array('country_code' => 'MV', 'country_name' => 'Maldives','phone_code' => 960),
            array('country_code' => 'ML', 'country_name' => 'Mali','phone_code' => 223),
            array('country_code' => 'MT', 'country_name' => 'Malta','phone_code' => 356),
            array('country_code' => 'MH', 'country_name' => 'Marshall Islands','phone_code' => 692),
            array('country_code' => 'MQ', 'country_name' => 'Martinique','phone_code' => 596),
            array('country_code' => 'MR', 'country_name' => 'Mauritania','phone_code' => 222),
            array('country_code' => 'MU', 'country_name' => 'Mauritius','phone_code' => 230),
            array('country_code' => 'YT', 'country_name' => 'Mayotte','phone_code' => 269),
            array('country_code' => 'MX', 'country_name' => 'Mexico','phone_code' => 52),
            array('country_code' => 'FM', 'country_name' => 'Micronesia, Federated States of','phone_code' => 691),
            array('country_code' => 'MD', 'country_name' => 'Moldova, Republic of','phone_code' => 373),
            array('country_code' => 'MC', 'country_name' => 'Monaco','phone_code' => 377),
            array('country_code' => 'MN', 'country_name' => 'Mongolia','phone_code' => 976),
            array('country_code' => 'ME', 'country_name' => 'Montenegro','phone_code' => 382),
            array('country_code' => 'MS', 'country_name' => 'Montserrat','phone_code' => 1664),
            array('country_code' => 'MA', 'country_name' => 'Morocco','phone_code' => 212),
            array('country_code' => 'MZ', 'country_name' => 'Mozambique','phone_code' => 258),
            array('country_code' => 'MM', 'country_name' => 'Myanmar','phone_code' => 95),
            array('country_code' => 'NA', 'country_name' => 'Namibia','phone_code' => 264),
            array('country_code' => 'NR', 'country_name' => 'Nauru','phone_code' => 674),
            array('country_code' => 'NP', 'country_name' => 'Nepal','phone_code' => 977),
            array('country_code' => 'NL', 'country_name' => 'Netherlands','phone_code' => 31),
            array('country_code' => 'AN', 'country_name' => 'Netherlands Antilles','phone_code' => 599),
            array('country_code' => 'NC', 'country_name' => 'New Caledonia','phone_code' => 687),
            array('country_code' => 'NZ', 'country_name' => 'New Zealand','phone_code' => 64),
            array('country_code' => 'NI', 'country_name' => 'Nicaragua','phone_code' => 505),
            array('country_code' => 'NE', 'country_name' => 'Niger','phone_code' => 227),
            array('country_code' => 'NG', 'country_name' => 'Nigeria','phone_code' => 234),
            array('country_code' => 'NU', 'country_name' => 'Niue','phone_code' => 683),
            array('country_code' => 'NF', 'country_name' => 'Norfolk Island','phone_code' => 672),
            array('country_code' => 'MP', 'country_name' => 'Northern Mariana Islands','phone_code' => 1670),
            array('country_code' => 'NO', 'country_name' => 'Norway','phone_code' => 47),
            array('country_code' => 'OM', 'country_name' => 'Oman','phone_code' => 968),
            array('country_code' => 'PK', 'country_name' => 'Pakistan','phone_code' => 92),
            array('country_code' => 'PW', 'country_name' => 'Palau','phone_code' => 680),
            array('country_code' => 'PS', 'country_name' => 'Palestinian Territory, Occupied','phone_code' => 970),
            array('country_code' => 'PA', 'country_name' => 'Panama','phone_code' => 507),
            array('country_code' => 'PG', 'country_name' => 'Papua New Guinea','phone_code' => 675),
            array('country_code' => 'PY', 'country_name' => 'Paraguay','phone_code' => 595),
            array('country_code' => 'PE', 'country_name' => 'Peru','phone_code' => 51),
            array('country_code' => 'PH', 'country_name' => 'Philippines','phone_code' => 63),
            array('country_code' => 'PN', 'country_name' => 'Pitcairn','phone_code' => 64),
            array('country_code' => 'PL', 'country_name' => 'Poland','phone_code' => 48),
            array('country_code' => 'PT', 'country_name' => 'Portugal','phone_code' => 351),
            array('country_code' => 'PR', 'country_name' => 'Puerto Rico','phone_code' => 1787),
            array('country_code' => 'QA', 'country_name' => 'Qatar','phone_code' => 974),
            array('country_code' => 'RE', 'country_name' => 'Reunion','phone_code' => 262),
            array('country_code' => 'RO', 'country_name' => 'Romania','phone_code' => 40),
            array('country_code' => 'RU', 'country_name' => 'Russian Federation','phone_code' => 70),
            array('country_code' => 'RW', 'country_name' => 'Rwanda','phone_code' => 250),
            array('country_code' => 'BL', 'country_name' => 'Saint Barthelemy','phone_code' => 590),
            array('country_code' => 'SH', 'country_name' => 'Saint Helena','phone_code' => 290),
            array('country_code' => 'KN', 'country_name' => 'Saint Kitts and Nevis','phone_code' => 1869),
            array('country_code' => 'LC', 'country_name' => 'Saint Lucia','phone_code' => 1758),
            array('country_code' => 'MF', 'country_name' => 'Saint Martin','phone_code' => 590),
            array('country_code' => 'PM', 'country_name' => 'Saint Pierre and Miquelon','phone_code' => 508),
            array('country_code' => 'VC', 'country_name' => 'Saint Vincent and the Grenadines','phone_code' => 1784),
            array('country_code' => 'WS', 'country_name' => 'Samoa','phone_code' => 684),
            array('country_code' => 'SM', 'country_name' => 'San Marino','phone_code' => 378),
            array('country_code' => 'ST', 'country_name' => 'Sao Tome and Principe','phone_code' => 239),
            array('country_code' => 'SA', 'country_name' => 'Saudi Arabia','phone_code' => 966),
            array('country_code' => 'SN', 'country_name' => 'Senegal','phone_code' => 221),
            array('country_code' => 'RS', 'country_name' => 'Serbia','phone_code' => 381),
            array('country_code' => 'CS', 'country_name' => 'Serbia and Montenegro','phone_code' => 381),
            array('country_code' => 'SC', 'country_name' => 'Seychelles','phone_code' => 248),
            array('country_code' => 'SL', 'country_name' => 'Sierra Leone','phone_code' => 232),
            array('country_code' => 'SG', 'country_name' => 'Singapore','phone_code' => 65),
            array('country_code' => 'SX', 'country_name' => 'Sint Maarten','phone_code' => 1),
            array('country_code' => 'SK', 'country_name' => 'Slovakia','phone_code' => 421),
            array('country_code' => 'SI', 'country_name' => 'Slovenia','phone_code' => 386),
            array('country_code' => 'SB', 'country_name' => 'Solomon Islands','phone_code' => 677),
            array('country_code' => 'SO', 'country_name' => 'Somalia','phone_code' => 252),
            array('country_code' => 'ZA', 'country_name' => 'South Africa','phone_code' => 27),
            array('country_code' => 'GS', 'country_name' => 'South Georgia and the South Sandwich Islands','phone_code' => 500),
            array('country_code' => 'SS', 'country_name' => 'South Sudan','phone_code' => 211),
            array('country_code' => 'ES', 'country_name' => 'Spain','phone_code' => 34),
            array('country_code' => 'LK', 'country_name' => 'Sri Lanka','phone_code' => 94),
            array('country_code' => 'SD', 'country_name' => 'Sudan','phone_code' => 249),
            array('country_code' => 'SR', 'country_name' => 'Suriname','phone_code' => 597),
            array('country_code' => 'SJ', 'country_name' => 'Svalbard and Jan Mayen','phone_code' => 47),
            array('country_code' => 'SZ', 'country_name' => 'Swaziland','phone_code' => 268),
            array('country_code' => 'SE', 'country_name' => 'Sweden','phone_code' => 46),
            array('country_code' => 'CH', 'country_name' => 'Switzerland','phone_code' => 41),
            array('country_code' => 'SY', 'country_name' => 'Syrian Arab Republic','phone_code' => 963),
            array('country_code' => 'TW', 'country_name' => 'Taiwan, Province of China','phone_code' => 886),
            array('country_code' => 'TJ', 'country_name' => 'Tajikistan','phone_code' => 992),
            array('country_code' => 'TZ', 'country_name' => 'Tanzania, United Republic of','phone_code' => 255),
            array('country_code' => 'TH', 'country_name' => 'Thailand','phone_code' => 66),
            array('country_code' => 'TL', 'country_name' => 'Timor-Leste','phone_code' => 670),
            array('country_code' => 'TG', 'country_name' => 'Togo','phone_code' => 228),
            array('country_code' => 'TK', 'country_name' => 'Tokelau','phone_code' => 690),
            array('country_code' => 'TO', 'country_name' => 'Tonga','phone_code' => 676),
            array('country_code' => 'TT', 'country_name' => 'Trinidad and Tobago','phone_code' => 1868),
            array('country_code' => 'TN', 'country_name' => 'Tunisia','phone_code' => 216),
            array('country_code' => 'TR', 'country_name' => 'Turkey','phone_code' => 90),
            array('country_code' => 'TM', 'country_name' => 'Turkmenistan','phone_code' => 7370),
            array('country_code' => 'TC', 'country_name' => 'Turks and Caicos Islands','phone_code' => 1649),
            array('country_code' => 'TV', 'country_name' => 'Tuvalu','phone_code' => 688),
            array('country_code' => 'UG', 'country_name' => 'Uganda','phone_code' => 256),
            array('country_code' => 'UA', 'country_name' => 'Ukraine','phone_code' => 380),
            array('country_code' => 'AE', 'country_name' => 'United Arab Emirates','phone_code' => 971),
            array('country_code' => 'GB', 'country_name' => 'United Kingdom','phone_code' => 44),
            array('country_code' => 'US', 'country_name' => 'United States','phone_code' => 1),
            array('country_code' => 'UM', 'country_name' => 'United States Minor Outlying Islands','phone_code' => 1),
            array('country_code' => 'UY', 'country_name' => 'Uruguay','phone_code' => 598),
            array('country_code' => 'UZ', 'country_name' => 'Uzbekistan','phone_code' => 998),
            array('country_code' => 'VU', 'country_name' => 'Vanuatu','phone_code' => 678),
            array('country_code' => 'VE', 'country_name' => 'Venezuela','phone_code' => 58),
            array('country_code' => 'VN', 'country_name' => 'Viet Nam','phone_code' => 84),
            array('country_code' => 'VG', 'country_name' => 'Virgin Islands, British','phone_code' => 1284),
            array('country_code' => 'VI', 'country_name' => 'Virgin Islands, U.s.','phone_code' => 1340),
            array('country_code' => 'WF', 'country_name' => 'Wallis and Futuna','phone_code' => 681),
            array('country_code' => 'EH', 'country_name' => 'Western Sahara','phone_code' => 212),
            array('country_code' => 'YE', 'country_name' => 'Yemen','phone_code' => 967),
            array('country_code' => 'ZM', 'country_name' => 'Zambia','phone_code' => 260),
            array('country_code' => 'ZW', 'country_name' => 'Zimbabwe','phone_code' => 263)
        );

        foreach($countries as $item){
            Country::create($item);
        }
    }
}
