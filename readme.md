# Açık kaynak "CY WHEEL - Karar Verme Çark" scripti
Merhaba arkadaşlar, "Codetify Yazılım" ekibi olarak sizlere codeigniter ile yazmış olduğumuz Karar verme çark scriptini ücretsiz olarak vermeyi düşündük :) Artık Kendiniz veya arkadaşlarınız arasında kararsız kalmaya son... :D

# Yönetim paneli özellikleri
-Karar Ekle Kısmı (Ekle - Düzenle - Sil)
-Profilim Sayfası (Düzenle)
-Site Ayarları (Site bilgilerini düzenleme)
-Slider Sayfası (Ekle - Düzenle - Sil)
-Kullanıcı Ayarları (Ekle - Düzenle - Sil - Şifre Değiştir)
-Kullanıcı Rolü (Ekle - Düzenle - Sil - Yetki Tanımla)

# Açıklama
Karar vermede zorlanan kişilere,arkadaşlarınız arasında karar vermeyi kolay hale getirmek isteyenlere veya sitesine karar verme çarkı eklemek isteyen kişilere özel ücretsiz scripti sizlere sunuyoruz. Anasayfa kısmında StartBootstrap tarafından ücretsiz yayınlanan "Bootstrap Login Screen with Floating Labels" kullanılmıştır. Admin paneli kısmında StartBootstrap tarafından ücretsiz yayınlanan "SB Admin" kullanılmıştır. Kullanımı son derece basit ve kolaydır. Admin panelinde Karar ekleme, profil ayarları, site ayarları  gibi sayfalar bulunmaktadır. Karar Ekleme sayfasından verilerinizi ekleyerek anasayfadaki çarkı veya admin panelinizdeki çarkın kullanabilirsiniz.

# Yönetim paneli bilgileri (demo panel bilgileri için bu adresten iletişime geçebilirsiniz: https://codetify.net/iletisim)
website.com/login
Kullanıcı adı: senseref67@gmail.com
Şifre: 123456
(Bu bilgileri daha sonra yönetim panelinden değiştirebilirsiniz.)


# Kurulum
includes->baglanti.php= bu dizindeki dosyanın içerisinde;
$db = new PDO('mysql:host=buraya veritabanı sunucunuzun adı;dbname=buraya veritabanı adı','buraya veritabanı kullanıcı adı','buraya veritabanı şifreniz');

bu alanları kendinize göre doldurunuz.

admin_panel->application->config->config.php = bu dizindeki dosyanın içerisinde;

$config['base_url'] = 'dizin buraya';

bu alana scriptin kurulu olduğu dizini yazın.


admin_panel->application->config->database.php = bu dizindeki dosyanın içerisinde;

    'hostname' => 'buraya veritabanı sunucunuzun adı',
	'username' => 'buraya veritabanı kullanıcı adınız',
	'password' => 'buraya veritabanı şifreniz',
	'database' => 'buraya veritabanı adınız',
  
  bu alanları kendinize göre doldurunuz.

  
  
  
Eğer kurulumda bir sorun çıkarsa veya yardımcı olabileceğimiz bir konu olursa bizlere; sosyal medya adreslerimizden ve https://codetify.net/iletisim adresinden ulaşabilirsiniz.
  
#  Not: Bu script tamamen açık kaynak ve ücretsizdir. Kendinize göre düzenleyebilirsiniz FAKAT SATIŞI KESİNLİKLE YASAKTIR!