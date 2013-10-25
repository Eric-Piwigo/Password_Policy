<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2013 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['PP_Title'] = 'Password Policy - Versiyon:';
$lang['PP_submit'] = 'Ayarları Kaydet';
$lang['PP_save_config'] = 'Ayarlar Kaydedildi';
$lang['PP_Disable'] = 'Devre Dışı [varsayılan]';
$lang['PP_Enable'] = 'Etkinleştir';
$lang['PP_PasswordTest'] = 'Şifreyi dene:';
$lang['PP_ScoreTest'] = 'Sonuç: ';
$lang['PP_Error_Password_Mandatory'] = 'Güvenlik: Şifre zorunludur.';
$lang['PP_Error_Password_Need_Enforcement_%s'] = 'Güvenlik: Kontorl sistemi seçilen şifreler için karmaşık bir kontorl mekanizması sağlar. Şifreniz çok basit (karakter sayısı=%s) Lütfen aşağıdaki kurallara dikkat ederek yeni bir şifre belirleyin: <br>
- Harf ve rakam kullanın<br>
- Büyük ve küçük harf kullanın<br>
- Uzunluğu arttırın (karakter uzunluğunu)<br>
Yönetici tarafından belirlenmiş minimum şifre uzunluğu:';
$lang['PP_Password_Enforced_true'] = 'Etkin. Minimum Puan:';
$lang['PP_AdminPassword_Enforced'] = 'Yöneticilere uygulanıyor';
$lang['PP_Password_Reset_Msg'] = 'Lütfen şifrenizi değiştirin!';
$lang['PP_PwdReset'] = 'Şifre yenileme';
$lang['PP_Password reset selected users'] = 'Seçilen kullanıcılar için şifre yenileme isteği';
$lang['PP_Guest cannot be pwdreset'] = 'Misafir hesabı için şifre yenileme ayarlanamaz!';
$lang['PP_Default user cannot be pwdreset'] = 'Şifre yenileme varsayılan kullanıcı hesabı için ayarlanamaz!';
$lang['PP_Webmaster cannot be pwdreset'] = 'Şifre yenileme webmaster hesabı için ayarlanamaz.';
$lang['PP_Generic cannot be pwdreset'] = 'Jenerik hesaplar için şifre yenileme ayarlanamaz!';
$lang['PP_Admins cannot be pwdreset'] = 'Yönetici hesapları için şifre yenilemesi ayarlanamaz!';
$lang['PP_You cannot pwdreset your account'] = 'Şifre yenileme kendi hesabınız için ayarlanamaz.';
$lang['PP_You need to confirm pwdreset'] = 'Şifre yenilemek için onay kutusunu işaretlemelisiniz!';
$lang['PP_PwdReset_Todo'] = 'Şifre yenilemesi';
$lang['PP_PwdReset_Done'] = 'Şifre yenilendi';
$lang['PP_PwdReset_NA'] = 'Orjinal şifre';
$lang['PP %d user pwdreseted'] = '%d kullanıcısı için şifre yenileme gerekli';
$lang['PP %d users pwdreseted'] = '%d kullanıcı için şifre yenileme gerekli';
$lang['PP_Webmaster is not unlockable'] = 'Webmaster kullanıcı hesabı kilitlenemez ve kilitleri açılamaz';
$lang['PP_passwtestTitle_d'] = 'Test edilecek şifreyi girin ve sonucu görmek için &quot;Şifreyi dene:&quot; \'ye tıklayın.';
$lang['PP_passwtestTitle'] = 'Bir şifrenin karmaşıklık testi';
$lang['PP_You cannot unlock your account'] = 'Kendinize ait hesabın kilidini açamazsınız';
$lang['PP_You need to confirm unlock'] = 'Kilidi açmak için onay kutusunu işaretlemelisiniz!';
$lang['PP_UserLocked_Custom_Txt'] = 'Kilitli kullanıcı için bilgi mesajı özelleştirme';
$lang['PP_Unlock'] = 'Kilidi açmak';
$lang['PP_User Not Locked'] = 'Kullanıcı kilitlenmedi';
$lang['PP_User Locked'] = 'Kullanıcı kilitlendi';
$lang['PP_Unlock selected users'] = 'Seçili kullanıcıların kilidini aç';
$lang['PP_SubTitle'] = 'Eklenti yapılandırma';
$lang['PP_Password_Enforced'] = 'Şifre güvenlik seviyesinin güçlendirilmesi';
$lang['PP_Max number of failed attempts_d'] = 'Sıfır değeri sayma girişimini devre dışı bırakır.';
$lang['PP_Max number of failed attempts'] = 'Azami hatalı oturum açma girişimi sayısı:';
$lang['PP_LoginAttempts'] = 'Hatalı oturum açma girişimlerinin yönetimi';
$lang['PP_LockedUsers'] = 'Kilitleme durumu';
$lang['PP_Guest is not unlockable'] = 'Ziyaretçi kullanıcıları kilitlenemez ve kilitleri açılamaz';
$lang['PP_Generic is not unlockable'] = 'Jenerik kullanıcı hesapları kilitlenemez ve kilitleri açılamaz';
$lang['PP_Default user is not unlockable'] = 'Varsayılan kullanıcı hesabı kilitlenemez ve kilitleri açılamaz';
$lang['PP_Admins is not unlockable'] = 'Yönetici hesapları kilitlenemez ve kilitleri açılamaz';
$lang['PP_UserLocked_Custom_Txt_d'] = 'Hesabı kilitlenecek kullanıcılarda görüntülenecek mesajı buradan değiştirebilirsiniz. Çoklu dil kullanmak için, eğer aktif ise "Extended description" eklentisini kullanabilirsiniz.';
$lang['PP_Support_txt'] = 'Bu eklentinin resmi desteği şu başlıkta verilmektedir: Piwigo forum:<br/><a href="http://piwigo.org/forum/viewtopic.php?id=22863" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=22863</a>';
$lang['PP_User_Account_Locked_Txt'] = 'Üzgünüz ama, güvenlik kuralları gereği, çok fazla başarısız oturum açma girişiminiz sebebiyle galeriye erişiminiz kilitlendi. Bu durum, hesabınızda bir hack girişimi nedeniyle de olmuş olabilir. Kilidin açılması için site yöneticisine başvurun.';
$lang['PP_passwadmTitle_d'] = 'Yönetici, karmaşıklık hesabı kuralını uygulayarak veya uygulamayarak bir kullanıcı hesabı yaratabilir.<br/><br/>
Not: Eğer hesabı oluşturulan aktif kullanıcı şifresini değiştirip güçlendirmek istiyorsa, bu kural setine tabi olacaktır.';
$lang['PP %d user unlocked'] = '%d kullanıcı kilidi açıldı';
$lang['PP %d users unlocked'] = '%d kullanıcı kilidi açıldı';
?>