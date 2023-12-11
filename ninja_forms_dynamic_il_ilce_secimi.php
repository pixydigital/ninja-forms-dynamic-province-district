
function il_ve_ilceleri_sec() {
    ?>
    <script type="text/javascript">
		setTimeout(() => {
            jQuery(document).ready(function ($) {
				var ilForAttributeValue = $('.nf-field-label label:contains("İl")').attr('for');
                var ilceForAttributeValue = $('.nf-field-label label:contains("İlçe")').attr('for');
                var ilSelect = $('#'+ilForAttributeValue);
                var ilceSelect = $('#'+ilceForAttributeValue);
				
				function getIlListesi() {
                    return [
                      "Adana",
                      "Adıyaman",
                      "Afyonkarahisar",
                      "Ağrı",
                      "Amasya",
                      "Ankara",
                      "Antalya",
                      "Artvin",
                      "Aydın",
                      "Balıkesir",
                      "Bilecik",
                      "Bingöl",
                      "Bitlis",
                      "Bolu",
                      "Burdur",
                      "Bursa",
                      "Çanakkale",
                      "Çankırı",
                      "Çorum",
                      "Denizli",
                      "Diyarbakır",
                      "Edirne",
                      "Elazığ",
                      "Erzincan",
                      "Erzurum",
                      "Eskişehir",
                      "Gaziantep",
                      "Giresun",
                      "Gümüşhane",
                      "Hakkâri",
                      "Hatay",
                      "Isparta",
                      "İçel (Mersin)",
                      "İstanbul",
                      "İzmir",
                      "Kahramanmaraş",
                      "Karabük",
                      "Karaman",
                      "Kars",
                      "Kastamonu",
                      "Kayseri",
                      "Kırıkkale",
                      "Kırklareli",
                      "Kırşehir",
                      "Kocaeli",
                      "Konya",
                      "Kütahya",
                      "Malatya",
                      "Manisa",
                      "Kahramanmaraş",
                      "Mardin",
                      "Muğla",
                      "Muş",
                      "Nevşehir",
                      "Niğde",
                      "Ordu",
                      "Rize",
                      "Sakarya",
                      "Samsun",
                      "Siirt",
                      "Sinop",
                      "Sivas",
                      "Tekirdağ",
                      "Tokat",
                      "Trabzon",
                      "Tunceli",
                      "Şanlıurfa",
                      "Uşak",
                      "Van",
                      "Yozgat",
                      "Zonguldak",
                      "Aksaray",
                      "Bayburt",
                      "Karaman",
                      "Kırıkkale",
                      "Batman",
                      "Şırnak",
                      "Bartın",
                      "Ardahan",
                      "Iğdır",
                      "Yalova",
                      "Karabük",
                      "Kilis",
                      "Osmaniye",
                      "Düzce"
                  ];
				};
				
				function getIlceListesi(il) {
                    var ilceler = {
                        "Ankara": ["Altındağ", "Ayaş", "Bala", "Beypazarı", "Çamlıdere", "Çankaya", "Çubuk", "Etimesgut", "Haymana", "Kalecik", "Keçiören", "Kızılcahamam", "Mamak", "Nallıhan", "Polatlı", "Şereflikoçhisar", "Sincan", "Yenimahalle"],
                        "İstanbul": ["Adalar", "Bağcılar", "Bahçelievler", "Bakırköy", "Beşiktaş", "Beykoz", "Beyoğlu", "Büyükçekmece", "Çatalca", "Eminönü", "Esenler", "Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"],
                        "İzmir": ["Aliağa", "Balçova", "Bayındır", "Bergama", "Beydağ", "Bornova", "Buca", "Çeşme", "Dikili", "Foça", "Güzelbahçe", "Karaburun", "Karşıyaka", "Kemalpaşa", "Kınık", "Kiraz", "Konak", "Menderes", "Menemen", "Narlıdere", "Ödemiş", "Seferihisar", "Selçuk", "Tire", "Torbalı", "Urla"],
                        "Adana": ["Aladağ", "Ceyhan", "Feke", "Karaisalı", "Kozan", "Pozantı", "Saimbeyli", "Seyhan", "Yumurtalı", "Yüreğir"],
                        "Adıyaman": ["Besni", "Gölbaşı", "Kahta", "Merkez"],
                        "Afyon": ["Başmakçı", "Bolvadin", "Çay", "Çobanlar", "Dinar", "Emirdağ", "İhsaniye", "Kızılören", "Merkez", "Sandıklı", "Sincanlı", "Suhut", "Sultandağı"],
                        "Ağrı": ["Diyadin", "Doğubeyazıt", "Merkez", "Patnos", "Tutak"],
                        "Aksaray": ["Eskil", "Gülağaç", "Güzelyurt", "Merkez"],
                        "Amasya": ["Göynücek", "Gümüşhacıköy", "Merkez", "Merzifon", "Suluova", "Taşova"],
                        "Antalya": ["Akseki", "Alanya", "Elmalı", "Finike", "Gazipaşa", "İbradi", "Kale", "Kaş", "Korkuteli", "Kumluca", "Manavgat", "Merkez", "Serik"],
                        "Ardahan": ["Çıldır", "Göle", "Merkez"],
                        "Artvin": ["Ardanuc", "Arhavi", "Hopa", "Merkez", "Murgül", "Savsat", "Yusufeli"],
                        "Aydın": ["Bozdoğan", "Buharkent", "Çine", "Germencik", "İncirliova", "Karacasu", "Karpuzlu", "Koçarlı", "Köşk", "Kuşadası", "Kuyucak", "Merkez", "Nazilli", "Söke", "Sultanhisar", "Yenihisar", "Yenipazar"],
                        "Balıkesir": ["Ayvalık", "Balya", "Bandırma", "Bigadiç", "Burhaniye", "Dursunbey", "Edremit", "Erdek", "Gömeç", "Gönen", "Havran", "İvrindi", "Kepsut", "Manyas", "Merkez", "Savaştepe", "Sındırgı", "Susurluk"],
                        "Bartın": ["Amasra", "Merkez", "Ulus"],
                        "Batman": ["Hasankeyf", "Merkez"],
                        "Bayburt": ["Aydıntepe", "Demirözü", "Merkez"],
                        "Bilecek": ["Bozhüyük", "Gölpazarı", "Merkez", "Osmaneli", "Pazaryeri", "Söğüt"],
                        "Bingöl": ["Adaklı", "Genç", "Karlıova", "Kiğı", "Merkez", "Solhan", "Yayladere", "Yedisu"],
                        "Bitlis": ["Adilcevaz", "Ahlat", "Güloymak", "Merkez", "Mutki", "Tatvan"],
                        "Bolu": ["Dörtdivan", "Gerede", "Göynük", "Mengen", "Merkez", "Mudurnu", "Yeniçağa"],
                        "Burdur": ["Ağlasun", "Bucak", "Çavdır", "Gölhisar", "Karamanlı", "Merkez", "Tefenni", "Yeşilova"],
                        "Bursa": ["Gemlik", "Gürsu", "İnegöl", "İznik", "Karacabey", "Keleş", "Kestel", "Mudanya", "MustafaKemalPaşa", "Nilüfer", "Orhaneli", "Orhangazi", "Osmangazi", "Yenişehir", "Yıldırım"],
                        "Çanakkale": ["Ayvacık", "Bayramiç", "Biga", "Bozcaada", "Çan", "Eceabat", "Ezine", "Gölbaşı", "Gökçeada", "Lapseki", "Merkez", "Yenice"],
                        "Çankırı": ["Atkaracalar", "Bayramören", "Çerkeş", "Eldivan", "Ilgaz", "Kurşunlu", "Merkez", "Orta", "Şabanözü", "Yapraklı"],
                        "Çorum": ["Alaca", "Boğazkale", "Iskılıp", "Kargı", "Mecitözü", "Merkez", "Oğuzlar", "Osmancık", "Sungurlu", "Uğurludağ"],
                        "Denizli": ["Acıpayam", "Babadağ", "Buldan", "Çal", "Çardak", "Çivril", "Güney", "Holaz", "Kale", "Merkez", "Sarayköy", "Tavaş"],
                        "Diyarbakır": ["Çermik", "Eğil", "Ergani", "Hani", "Hazro", "Kocaköy", "Lice", "Merkez", "Silvan"],
                        "Düzce": ["Akçakoca", "Çilimli", "Merkez", "Yığılca"],
                        "Edirne": ["Enes", "Havsa", "İpsala", "Keşan", "Lalapaşa", "Meriç", "Merkez", "Uzunköprü"],
                        "Elazığ": ["Ağin", "Arıcak", "Baskıl", "Karakoçan", "Keban", "Kovancılar", "Maden", "Merkez", "Palu", "Sivrice"],
                        "Erzincan": ["Çayırlı", "Ilıç", "Kemah", "Kemaliye", "Merkez", "Refahiye", "Tercan", "Üzümlü"],
                        "Erzurum": ["Aşkale", "Hınıs", "Horasan", "Ilıca", "İspir", "Narman", "Oltu", "Olur", "Pasinler", "Tortum"],
                        "Eskişehir": ["Alpu", "Beylikova", "Çifteler", "Günyüzü", "Han", "İnönü", "Mahmudiye", "Merkez", "Mihalıçcık", "Seyitgazi", "Sivrihisar"],
                        "Gaziantep": ["Araban", "Islahiye", "Nizip", "Nurdağı", "Oğuzeli", "Şahinbey", "Şehitkamil", "Yavuzeli"],
                        "Giresun": ["Alucra", "Bulancak", "Dereli", "Espiye", "Eynesil", "Görele", "Keşap", "Merkez", "Şebinkarahisar", "Tirebolu"],
                        "Gümüşhane": ["Kelkit", "Kurtun", "Merkez", "Şiran"],
                        "Hakkari": ["Çukurca", "Merkez", "Şemdilli", "Yüksekova"],
                        "Hatay": ["Altınözü", "Belen", "Dörtyol", "Yüksekova", "Erzin", "İskenderun", "Kırıkhan", "Kumlu", "Merkez", "Reyhanlı", "Samandağı", "Yayladağı"],
                        "Iğdır": ["Aralık", "Karakoyunlu", "Merkez", "Tuzluca"],
                        "Isparta": ["Aksu", "Atabey", "Eğirdir", "Gelendost", "Gönen", "Keçiborlu", "Merkez", "Sarkıkaraağaç", "Senirkent", "Sütçüler", "Uluborlu", "Yalvaç"],
                        "Kahramanmaraş": ["Afşın", "Andırın", "Çağlayancerit", "Elbistan", "Göksun", "Merkez", "Pazarcık"],
                        "Karabük": ["Eskipazar", "Merkez", "Safranbolu"],
                        "Karaman": ["Ayrancı", "Başyayla", "Ermenek", "Merkez"],
                        "Kars": ["Kağızman", "Merkez", "Sarıkamış"],
                        "Kastamonu": ["Abana", "Arac", "Bozkurt", "Çatalzeytin", "Cide", "Daday", "Devrenkanı", "Hanönü", "İhsangazi", "İnebolu", "Küre", "Merkez", "Taşköprü", "Tosya"],
                        "Kayseri": ["Akkışla", "Bünyan", "Develi", "Felahiye", "Hacılar", "İncesu", "Kocasinan", "Melekgazi", "Özvatan", "Pınarbaşı", "Talas", "Tomarza", "Yahyalı", "Yeşilhisar"],
                        "Kilis": ["Elbeyli", "Merkez", "Musabeyli", "Polateli"],
                        "Kırıkkale": ["Karakeçili", "Keskin", "Merkez", "Sulakyurt"],
                        "Kırklareli": ["Babaski", "Lüleburgaz", "Merkez", "Pehlivanköy", "Pınarhisar", "Vize"],
                        "Kırşehir": ["Akpınar", "Çiçekdağı", "Kaman", "Merkez", "Mucur"],
                        "Kocaeli": ["Derince", "Gebze", "Gölcük", "Kandıra", "Karamürsel", "Merkez"],
                        "Konya": ["Akören", "Akşehir", "Altınekin", "Beyşehir", "Bozkır", "Çeltik", "Cihanbeyli", "Çumra", "Derbent", "Doğanhisar", "Emirgazi", "Ereğli", "Hadım", "Hüyük", "Ilgın", "Kadınhanı", "Karapınar", "Karatay", "Meram", "Sarayönü", "Selçuklu", "Seydişehir", "Taşkent", "Yunak"],
                        "Kütahya": ["Altıntaş", "Domaniç", "Dumlupınar", "Emet", "Gediz", "Merkez", "Pazarlar", "Simav", "Tavşanlı"],
                        "Malatya": ["Akçadağ", "Arapkır", "Arguvan", "Battalgazi", "Darende", "Doğanşehir", "Hekimhan", "Merkez", "Pötürge", "Yazıhan", "Yeşilhan"],
                        "Manisa": ["Ahmetli", "Akhisar", "Alaşehir", "Demirci", "Gölmarmara", "Gördes", "Kırkağaç", "Kula", "Merkez", "Salihli", "Sarıhanlı", "Soma", "Turgutlu"],
                        "Mardin": ["Derik", "Kızıltepe", "Mazıdağı", "Merkez", "Midyat", "Nusaybin", "Ömerli", "Savur"],
                        "Mersin": ["Anamur", "Bozyazı", "Çamlıyayla", "Erdemli", "Gülnar", "Merkez", "Mut", "Silifke", "Tarsus"],
                        "Muğla": ["Bodrum", "Datça", "Fathiye", "Kavaklıdere", "Köyceğiz", "Marmaris", "Merkez", "Milas", "Ortaca", "Ula", "Yatağan"],
                        "Muş": ["Bulanık", "Korkut", "Malazgirt", "Merkez"],
                        "Nevşehir": ["Avanos", "Derinkuyu", "Gülşehir", "Hacıbektaş", "Kozaklı", "Merkez", "Ürgüp"],
                        "Niğde": ["Altunhisar", "Bor", "Çamardı", "Çiftlik", "Ulukışla"],
                        "Ordu": ["Akkuş", "Fatsa", "Görköy", "Kabadüz", "Merkez", "Mesudiye", "Perşembe", "Ulubey", "Ünye"],
                        "Osmaniye": ["Bahçe", "Kadirli", "Merkez"],
                        "Rize": ["Ardeşen", "Çayeli", "Fındıklı", "Merkez", "Pazar", "Çamlıhemşin"],
                        "Sakarya": ["Akyazı", "Geyve", "Hendek", "Karasu", "Kaynarca", "Merkez", "Sapanca", "Taraklı"],
                        "Samsun": ["Alaçam", "Bafra", "Çarşamba", "Havza", "Kavak", "Ladik", "Merkez", "Salıpazarı", "Tekkeköy", "Terme", "Vezirköprü"],
                        "Şanlıurfa": ["Akçakale", "Birecik", "Bozova", "Halfeti", "Harran", "Hilvan", "Merkez", "Siverek", "Suruç", "Viranşehir"],
                        "Siirt": ["Aydınlar", "Baykan", "Eruh", "Kurtalan", "Merkez"],
                        "Sinop": ["Ayancık", "Boyabat", "Durağan", "Elfelek", "Gerze", "Merkez"],
                        "Şırnak": ["Cizre", "İdil", "Merkez", "Silopi"],
                        "Sivas": ["Altınyayla", "Divriği", "Doğansar", "Gemerek", "Hafik", "Kangal", "Merkez", "Şarkışla", "Suşehri", "Yılızeli", "Zara"],
                        "Tekirdağ": ["Çerkezköy", "Çorlu", "Hayrabolu", "Malkara", "MarmaraEreğlisi", "Merkez", "Muratlı", "Saray", "Şarköy"],
                        "Tokat": ["Almuz", "Erbaa", "Merkez", "Niksar", "Pazar", "Reşadiye", "Sulusaray", "Turhal", "Zile"],
                        "Trabzon": ["Akçabat", "Araklı", "Arşin", "Beşikdüzü", "Çarşıbaşı", "Çaykara", "Dernekpazarı", "Maçka", "Merkez", "Of", "Sürmene", "Tonya", "Vakfıkebir", "Yomra"],
                        "Tunceli": ["Çemişgezek", "Hozat", "Mazgirt", "Merkez", "Nazimiye", "Pertek"],
                        "Uşak": ["Banaz", "Eşme", "Merkez", "Sivaslı", "Ulubey"],
                        "Van": ["Başkale", "Çaldıran", "Çatak", "Erciş", "Gevaş", "Gürpınar", "Merkez", "Muradiye", "Özalp"],
                        "Yalova": ["Altınova", "Armutlu", "Merkez"],
                        "Yozgat": ["Boğazlıyan", "Çandır", "Çayıralan", "Merkez", "Sarıkaya", "Sefaatli", "Sorgun", "Yenifakili", "Yerköy"],
                        "Zonguldak": ["Araplı", "Çaycuma", "Devrek", "Ereğli", "Merkez"],
                    };
					
					return ilceler[il] || [];
				};
				
				function getIllList() {
                  var ilListesi = getIlListesi();

                  if (ilListesi.length > 0) {
                      for (var i = 0; i < ilListesi.length; i++) {
                          var option = $('<option value='+ilListesi[i]+'>').text(ilListesi[i]);
                          ilSelect.append(option);
                      }
                      ilSelect.val(ilListesi[0]);
                      updateIlceList(ilListesi[0]);
                  }
                }
				
				function updateIlceList(selectedIl) {
                    var ilceListesi = getIlceListesi(selectedIl);

                    ilceSelect.empty();

                    if (ilceListesi.length > 0) {
                        for (var i = 0; i < ilceListesi.length; i++) {
                            var option = $('<option value='+ilceListesi[i]+'>').text(ilceListesi[i]);
                            ilceSelect.append(option);
                        }
                    } else {
                        var option = $('<option>').text('İlçe Bulunamadı');
                        ilceSelect.append(option);
                    }
                }
				
				getIllList();

                updateIlceList(ilSelect.val());

                ilSelect.on('change', function () {
                    var selectedIl = ilSelect.val();
                    updateIlceList(selectedIl);
                });
			});
		}, "2000");
    </script>
    <?php
}

add_action('wp_footer', 'il_ve_ilceleri_sec');
