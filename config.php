<?php
#######################
# KULLANICI BİLGİLERİ #
#######################
$account = array(
    'username' => '', // Kullanıcı adınız
    'password' => '' // Şifreniz
);
// Kullanıcı Bilgisi Boş/Dolu Kontrolü
if($account['username'] == '' || $account['password'] == '')
{
    die("Please put config.php file in your username and password.");
}




######################
# OTOMASYON AYARLARI #
######################

// Zaman Tüneli Medya Beğeni Ayarları
$timeline_liker = array(
    'interval' => 20, // Her beğeni sonrası beklenecek süre (Minimum Saniye: 20)
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);


// Zaman Tüneli Medya Yorum Ayarları
$timeline_commenter = array(
    'is_likes' => 0, // Yorum atılan gönderilerin aynı zamanda beğenilmesini istiyorsanız değeri 1 yapın.
    'interval' => 50, // Her yorum sonrası beklenecek süre (Minimum Saniye: 50)
    'have_err' => 120, // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
    'comments' => array('omg', 'cool', 'wow') // Gönderilere atılacak yorumları yazın
);


// Zaman Tüneli Yorum Beğeni Ayarları
$timeline_post_comment_liker = array(
    'max_like' => 3, // Her medyada beğenilecek yorum sayısı (Maksimum Adet: 5)
    'is_likes' => 1, // Yorumların beğenildiği medyalarıda beğenmek istiyorsanız değeri 1 yapın.
    'interval' => 20, // Her beğeni sonrası beklenecek süre (Minimum Saniye: 20)
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);