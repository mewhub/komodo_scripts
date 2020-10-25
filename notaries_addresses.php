<?php

echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<div class="container">
   <!-- (c) Decker, 2019-2020 -->
   <h2>Notaries Addresses</h2>
   ';

$Notaries_elected_S2_mainnet = Array(
    "0dev1_jl777" => "03b7621b44118017a16043f19b30cc8a4cfe068ac4e42417bae16ba460c80f3828" ,
    "0dev2_kolo" => "030f34af4b908fb8eb2099accb56b8d157d49f6cfb691baa80fdd34f385efed961" ,
    "0dev3_kolo" => "025af9d2b2a05338478159e9ac84543968fd18c45fd9307866b56f33898653b014" ,
    "0dev4_decker" => "028eea44a09674dda00d88ffd199a09c9b75ba9782382cc8f1e97c0fd565fe5707" ,
    "a-team_SH" => "03b59ad322b17cb94080dc8e6dc10a0a865de6d47c16fb5b1a0b5f77f9507f3cce" ,
    "artik_AR" => "029acf1dcd9f5ff9c455f8bb717d4ae0c703e089d16cf8424619c491dff5994c90" ,
    "artik_EU" => "03f54b2c24f82632e3cdebe4568ba0acf487a80f8a89779173cdb78f74514847ce" ,
    "artik_NA" => "0224e31f93eff0cc30eaf0b2389fbc591085c0e122c4d11862c1729d090106c842" ,
    "artik_SH" => "02bdd8840a34486f38305f311c0e2ae73e84046f6e9c3dd3571e32e58339d20937" ,
    "badass_EU" => "0209d48554768dd8dada988b98aca23405057ac4b5b46838a9378b95c3e79b9b9e" ,
    "badass_NA" => "02afa1a9f948e1634a29dc718d218e9d150c531cfa852843a1643a02184a63c1a7" ,
    "batman_AR" => "033ecb640ec5852f42be24c3bf33ca123fb32ced134bed6aa2ba249cf31b0f2563" ,
    "batman_SH" => "02ca5898931181d0b8aafc75ef56fce9c43656c0b6c9f64306e7c8542f6207018c" ,
    "ca333_EU" => "03fc87b8c804f12a6bd18efd43b0ba2828e4e38834f6b44c0bfee19f966a12ba99" ,
    "chainmakers_EU" => "02f3b08938a7f8d2609d567aebc4989eeded6e2e880c058fdf092c5da82c3bc5ee" ,
    "chainmakers_NA" => "0276c6d1c65abc64c8559710b8aff4b9e33787072d3dda4ec9a47b30da0725f57a" ,
    "chainstrike_SH" => "0370bcf10575d8fb0291afad7bf3a76929734f888228bc49e35c5c49b336002153" ,
    "cipi_AR" => "02c4f89a5b382750836cb787880d30e23502265054e1c327a5bfce67116d757ce8" ,
    "cipi_NA" => "02858904a2a1a0b44df4c937b65ee1f5b66186ab87a751858cf270dee1d5031f18" ,
    "crackers_EU" => "03bc819982d3c6feb801ec3b720425b017d9b6ee9a40746b84422cbbf929dc73c3" ,
    "crackers_NA" => "03205049103113d48c7c7af811b4c8f194dafc43a50d5313e61a22900fc1805b45" ,
    "dwy_EU" => "0259c646288580221fdf0e92dbeecaee214504fdc8bbdf4a3019d6ec18b7540424" ,
    "emmanux_SH" => "033f316114d950497fc1d9348f03770cd420f14f662ab2db6172df44c389a2667a" ,
    "etszombi_EU" => "0281b1ad28d238a2b217e0af123ce020b79e91b9b10ad65a7917216eda6fe64bf7" ,
    "fullmoon_AR" => "03380314c4f42fa854df8c471618751879f9e8f0ff5dbabda2bd77d0f96cb35676" ,
    "fullmoon_NA" => "030216211d8e2a48bae9e5d7eb3a42ca2b7aae8770979a791f883869aea2fa6eef" ,
    "fullmoon_SH" => "03f34282fa57ecc7aba8afaf66c30099b5601e98dcbfd0d8a58c86c20d8b692c64" ,
    "goldenman_EU" => "02d6f13a8f745921cdb811e32237bb98950af1a5952be7b3d429abd9152f8e388d" ,
    "indenodes_AR" => "02ec0fa5a40f47fd4a38ea5c89e375ad0b6ddf4807c99733c9c3dc15fb978ee147" ,
    "indenodes_EU" => "0221387ff95c44cb52b86552e3ec118a3c311ca65b75bf807c6c07eaeb1be8303c" ,
    "indenodes_NA" => "02698c6f1c9e43b66e82dbb163e8df0e5a2f62f3a7a882ca387d82f86e0b3fa988" ,
    "indenodes_SH" => "0334e6e1ec8285c4b85bd6dae67e17d67d1f20e7328efad17ce6fd24ae97cdd65e" ,
    "jackson_AR" => "038ff7cfe34cb13b524e0941d5cf710beca2ffb7e05ddf15ced7d4f14fbb0a6f69" ,
    "jeezy_EU" => "023cb3e593fb85c5659688528e9a4f1c4c7f19206edc7e517d20f794ba686fd6d6" ,
    "karasugoi_NA" => "02a348b03b9c1a8eac1b56f85c402b041c9bce918833f2ea16d13452309052a982" ,
    "komodoninja_EU" => "038e567b99806b200b267b27bbca2abf6a3e8576406df5f872e3b38d30843cd5ba" ,
    "komodoninja_SH" => "033178586896915e8456ebf407b1915351a617f46984001790f0cce3d6f3ada5c2" ,
    "komodopioneers_SH" => "033ace50aedf8df70035b962a805431363a61cc4e69d99d90726a2d48fb195f68c" ,
    "libscott_SH" => "03301a8248d41bc5dc926088a8cf31b65e2daf49eed7eb26af4fb03aae19682b95" ,
    "lukechilds_AR" => "031aa66313ee024bbee8c17915cf7d105656d0ace5b4a43a3ab5eae1e14ec02696" ,
    "madmax_AR" => "03891555b4a4393d655bf76f0ad0fb74e5159a615b6925907678edc2aac5e06a75" ,
    "meshbits_AR" => "02957fd48ae6cb361b8a28cdb1b8ccf5067ff68eb1f90cba7df5f7934ed8eb4b2c" ,
    "meshbits_SH" => "025c6e94877515dfd7b05682b9cc2fe4a49e076efe291e54fcec3add78183c1edb" ,
    "metaphilibert_AR" => "02adad675fae12b25fdd0f57250b0caf7f795c43f346153a31fe3e72e7db1d6ac6" ,
    "metaphilibert_SH" => "0284af1a5ef01503e6316a2ca4abf8423a794e9fc17ac6846f042b6f4adedc3309" ,
    "patchkez_SH" => "0296270f394140640f8fa15684fc11255371abb6b9f253416ea2734e34607799c4" ,
    "pbca26_NA" => "0276aca53a058556c485bbb60bdc54b600efe402a8b97f0341a7c04803ce204cb5" ,
    "peer2cloud_AR" => "034e5563cb885999ae1530bd66fab728e580016629e8377579493b386bf6cebb15" ,
    "peer2cloud_SH" => "03396ac453b3f23e20f30d4793c5b8ab6ded6993242df4f09fd91eb9a4f8aede84" ,
    "polycryptoblog_NA" => "02708dcda7c45fb54b78469673c2587bfdd126e381654819c4c23df0e00b679622" ,
    "hyper_AR" => "020f2f984d522051bd5247b61b080b4374a7ab389d959408313e8062acad3266b4" ,
    "hyper_EU" => "03d00cf9ceace209c59fb013e112a786ad583d7de5ca45b1e0df3b4023bb14bf51" ,
    "hyper_SH" => "0383d0b37f59f4ee5e3e98a47e461c861d49d0d90c80e9e16f7e63686a2dc071f3" ,
    "hyper_NA" => "03d91c43230336c0d4b769c9c940145a8c53168bf62e34d1bccd7f6cfc7e5592de" ,
    "popcornbag_AR" => "02761f106fb34fbfc5ddcc0c0aa831ed98e462a908550b280a1f7bd32c060c6fa3" ,
    "popcornbag_NA" => "03c6085c7fdfff70988fda9b197371f1caf8397f1729a844790e421ee07b3a93e8" ,
    "alien_AR" => "0348d9b1fc6acf81290405580f525ee49b4749ed4637b51a28b18caa26543b20f0" ,
    "alien_EU" => "020aab8308d4df375a846a9e3b1c7e99597b90497efa021d50bcf1bbba23246527" ,
    "thegaltmines_NA" => "031bea28bec98b6380958a493a703ddc3353d7b05eb452109a773eefd15a32e421" ,
    "titomane_AR" => "029d19215440d8cb9cc6c6b7a4744ae7fb9fb18d986e371b06aeb34b64845f9325" ,
    "titomane_EU" => "0360b4805d885ff596f94312eed3e4e17cb56aa8077c6dd78d905f8de89da9499f" ,
    "titomane_SH" => "03573713c5b20c1e682a2e8c0f8437625b3530f278e705af9b6614de29277a435b" ,
    "webworker01_NA" => "03bb7d005e052779b1586f071834c5facbb83470094cff5112f0072b64989f97d7" ,
    "xrobesx_NA" => "03f0cc6d142d14a40937f12dbd99dbd9021328f45759e26f1877f2a838876709e1" ,
);

$Notaries_elected_S3_mainnet = Array(
    "madmax_NA" => "0237e0d3268cebfa235958808db1efc20cc43b31100813b1f3e15cc5aa647ad2c3", // 0
    "alright_AR" => "020566fe2fb3874258b2d3cf1809a5d650e0edc7ba746fa5eec72750c5188c9cc9",
    "strob_NA" => "0206f7a2e972d9dfef1c424c731503a0a27de1ba7a15a91a362dc7ec0d0fb47685",
    "dwy_EU" => "021c7cf1f10c4dc39d13451123707ab780a741feedab6ac449766affe37515a29e",
    "phm87_SH" => "021773a38db1bc3ede7f28142f901a161c7b7737875edbb40082a201c55dcf0add",
    "chainmakers_NA" => "02285d813c30c0bf7eefdab1ff0a8ad08a07a0d26d8b95b3943ce814ac8e24d885",
    "indenodes_EU" => "0221387ff95c44cb52b86552e3ec118a3c311ca65b75bf807c6c07eaeb1be8303c",
    "blackjok3r_SH" => "021eac26dbad256cbb6f74d41b10763183ee07fb609dbd03480dd50634170547cc",
    "chainmakers_EU" => "03fdf5a3fce8db7dee89724e706059c32e5aa3f233a6b6cc256fea337f05e3dbf7",
    "titomane_AR" => "023e3aa9834c46971ff3e7cb86a200ec9c8074a9566a3ea85d400d5739662ee989",
    "fullmoon_SH" => "023b7252968ea8a955cd63b9e57dee45a74f2d7ba23b4e0595572138ad1fb42d21", // 10
    "indenodes_NA" => "02698c6f1c9e43b66e82dbb163e8df0e5a2f62f3a7a882ca387d82f86e0b3fa988",
    "chmex_EU" => "0281304ebbcc39e4f09fda85f4232dd8dacd668e20e5fc11fba6b985186c90086e",
    "metaphilibert_SH" => "0284af1a5ef01503e6316a2ca4abf8423a794e9fc17ac6846f042b6f4adedc3309",
    "ca333_DEV" => "02856843af2d9457b5b1c907068bef6077ea0904cc8bd4df1ced013f64bf267958",
    "cipi_NA" => "02858904a2a1a0b44df4c937b65ee1f5b66186ab87a751858cf270dee1d5031f18",
    "pungocloud_SH" => "024dfc76fa1f19b892be9d06e985d0c411e60dbbeb36bd100af9892a39555018f6",
    "voskcoin_EU" => "034190b1c062a04124ad15b0fa56dfdf34aa06c164c7163b6aec0d654e5f118afb",
    "decker_DEV" => "028eea44a09674dda00d88ffd199a09c9b75ba9782382cc8f1e97c0fd565fe5707",
    "cryptoeconomy_EU" => "0290ab4937e85246e048552df3e9a66cba2c1602db76e03763e16c671e750145d1",
    "etszombi_EU" => "0293ea48d8841af7a419a24d9da11c34b39127ef041f847651bae6ab14dcd1f6b4",  // 20
    "karasugoi_NA" => "02a348b03b9c1a8eac1b56f85c402b041c9bce918833f2ea16d13452309052a982",
    "pirate_AR" => "03e29c90354815a750db8ea9cb3c1b9550911bb205f83d0355a061ac47c4cf2fde",
    "metaphilibert_AR" => "02adad675fae12b25fdd0f57250b0caf7f795c43f346153a31fe3e72e7db1d6ac6",
    "zatjum_SH" => "02d6b0c89cacd58a0af038139a9a90c9e02cd1e33803a1f15fceabea1f7e9c263a",
    "madmax_AR" => "03c5941fe49d673c094bc8e9bb1a95766b4670c88be76d576e915daf2c30a454d3",
    "lukechilds_NA" => "03f1051e62c2d280212481c62fe52aab0a5b23c95de5b8e9ad5f80d8af4277a64b",
    "cipi_AR" => "02c4f89a5b382750836cb787880d30e23502265054e1c327a5bfce67116d757ce8",
    "tonyl_AR" => "02cc8bc862f2b65ad4f99d5f68d3011c138bf517acdc8d4261166b0be8f64189e1",
    "infotech_DEV" => "0345ad4ab5254782479f6322c369cec77a7535d2f2162d103d666917d5e4f30c4c",
    "fullmoon_NA" => "032c716701fe3a6a3f90a97b9d874a9d6eedb066419209eed7060b0cc6b710c60b",  // 30
    "etszombi_AR" => "02e55e104aa94f70cde68165d7df3e162d4410c76afd4643b161dea044aa6d06ce",
    "node-9_EU" => "0372e5b51e86e2392bb15039bac0c8f975b852b45028a5e43b324c294e9f12e411",
    "phba2061_EU" => "03f6bd15dba7e986f0c976ea19d8a9093cb7c989d499f1708a0386c5c5659e6c4e",
    "indenodes_AR" => "02ec0fa5a40f47fd4a38ea5c89e375ad0b6ddf4807c99733c9c3dc15fb978ee147",
    "and1-89_EU" => "02736cbf8d7b50835afd50a319f162dd4beffe65f2b1dc6b90e64b32c8e7849ddd",
    "komodopioneers_SH" => "032a238a5747777da7e819cfa3c859f3677a2daf14e4dce50916fc65d00ad9c52a",
    "komodopioneers_EU" => "036d02425916444fff8cc7203fcbfc155c956dda5ceb647505836bef59885b6866",
    "d0ct0r_NA" => "0303725d8525b6f969122faf04152653eb4bf34e10de92182263321769c334bf58",
    "kolo_DEV" => "02849e12199dcc27ba09c3902686d2ad0adcbfcee9d67520e9abbdda045ba83227",
    "peer2cloud_AR" => "02acc001fe1fe8fd68685ba26c0bc245924cb592e10cec71e9917df98b0e9d7c37", // 40
    "webworker01_SH" => "031e50ba6de3c16f99d414bb89866e578d963a54bde7916c810608966fb5700776",
    "webworker01_NA" => "032735e9cad1bb00eaababfa6d27864fa4c1db0300c85e01e52176be2ca6a243ce",
    "pbca26_NA" => "03a97606153d52338bcffd1bf19bb69ef8ce5a7cbdc2dbc3ff4f89d91ea6bbb4dc",
    "indenodes_SH" => "0334e6e1ec8285c4b85bd6dae67e17d67d1f20e7328efad17ce6fd24ae97cdd65e",
    "pirate_NA" => "0255e32d8a56671dee8aa7f717debb00efa7f0086ee802de0692f2d67ee3ee06ee",
    "lukechilds_AR" => "025c6a73ff6d750b9ddf6755b390948cffdd00f344a639472d398dd5c6b4735d23",
    "dragonhound_NA" => "0224a9d951d3a06d8e941cc7362b788bb1237bb0d56cc313e797eb027f37c2d375",
    "fullmoon_AR" => "03da64dd7cd0db4c123c2f79d548a96095a5a103e5b9d956e9832865818ffa7872",
    "chainzilla_SH" => "0360804b8817fd25ded6e9c0b50e3b0782ac666545b5416644198e18bc3903d9f9",
    "titomane_EU" => "03772ac0aad6b0e9feec5e591bff5de6775d6132e888633e73d3ba896bdd8e0afb", // 50
    "jeezy_EU" => "037f182facbad35684a6e960699f5da4ba89e99f0d0d62a87e8400dd086c8e5dd7",
    "titomane_SH" => "03850fdddf2413b51790daf51dd30823addb37313c8854b508ea6228205047ef9b",
    "alien_AR" => "03911a60395801082194b6834244fa78a3c30ff3e888667498e157b4aa80b0a65f",
    "pirate_EU" => "03fff24efd5648870a23badf46e26510e96d9e79ce281b27cfe963993039dd1351",
    "thegaltmines_NA" => "02db1a16c7043f45d6033ccfbd0a51c2d789b32db428902f98b9e155cf0d7910ed",
    "computergenie_NA" => "03a78ae070a5e9e935112cf7ea8293f18950f1011694ea0260799e8762c8a6f0a4",
    "nutellalicka_SH" => "02f7d90d0510c598ce45915e6372a9cd0ba72664cb65ce231f25d526fc3c5479fc",
    "chainstrike_SH" => "03b806be3bf7a1f2f6290ec5c1ea7d3ea57774dcfcf2129a82b2569e585100e1cb",
    "dwy_SH" => "036536d2d52d85f630b68b050f29ea1d7f90f3b42c10f8c5cdf3dbe1359af80aff",
    "alien_EU" => "03bb749e337b9074465fa28e757b5aa92cb1f0fea1a39589bca91a602834d443cd", // 60
    "gt_AR" => "0348430538a4944d3162bb4749d8c5ed51299c2434f3ee69c11a1f7815b3f46135",
    "patchkez_SH" => "03f45e9beb5c4cd46525db8195eb05c1db84ae7ef3603566b3d775770eba3b96ee",
    "decker_AR" => "03ffdf1a116300a78729608d9930742cd349f11a9d64fcc336b8f18592dd9c91bc" // 63
);

$Notaries_elected_S3_3rdparty = Array(
    "madmax_NA" => "02ef81a360411adf71184ff04d0c5793fc41fd1d7155a28dd909f21f35f4883ac1",
    "alright_AR" => "036a6bca1c2a8166f79fa8a979662892742346cc972b432f8e61950a358d705517",
    "strob_NA" => "02049202f3872877e81035549f6f3a0f868d0ad1c9b0e0d2b48b1f30324255d26d",
    "dwy_EU" => "037b29e58166f7a2122a9ebfff273b40805b6d710adc032f1f8cf077bdbe7c0d5c",
    "phm87_SH" => "03889a10f9df2caef57220628515693cf25316fe1b0693b0241419e75d0d0e66ed",
    "chainmakers_NA" => "030e4822bddba10eb50d52d7da13106486651e4436962078ee8d681bc13f4993e9",
    "indenodes_EU" => "03a416533cace0814455a1bb1cd7861ce825a543c6f6284a432c4c8d8875b7ace9",
    "blackjok3r_SH" => "03d23bb5aad3c20414078472220cc5c26bc5aeb41e43d72c99158d450f714d743a",
    "chainmakers_EU" => "034f8c0a504856fb3d80a94c3aa78828c1152daf8ccc45a17c450f32a1e242bb0c",
    "titomane_AR" => "0358cd6d7460654a0ddd5125dd6fa0402d0719999444c6cc3888689a0b4446136a",
    "fullmoon_SH" => "0275031fa79846c5d667b1f7c4219c487d439cd367dd294f73b5ecd55b4e673254",
    "indenodes_NA" => "02b3908eda4078f0e9b6704451cdc24d418e899c0f515fab338d7494da6f0a647b",
    "chmex_EU" => "03e5b7ab96b7271ecd585d6f22807fa87da374210a843ec3a90134cbf4a62c3db1",
    "metaphilibert_SH" => "03b21ff042bf1730b28bde43f44c064578b41996117ac7634b567c3773089e3be3",
    "ca333_DEV" => "029c0342ce2a4f9146c7d1ee012b26f5c2df78b507fb4461bf48df71b4e3031b56",
    "cipi_NA" => "034406ac4cf94e84561c5d3f25384dd59145e92fefc5972a037dc6a44bfa286688",
    "pungocloud_SH" => "0203064e291045187927cc35ed350e046bba604e324bb0e3b214ea83c74c4713b1",
    "voskcoin_EU" => "037bfd946f1dd3736ddd2cb1a0731f8b83de51be5d1be417496fbc419e203bc1fe",
    "decker_DEV" => "02fca8ee50e49f480de275745618db7b0b3680b0bdcce7dcae7d2e0fd5c3345744",
    "cryptoeconomy_EU" => "037d04b7d16de61a44a3fc766bea4b7791023a36675d6cee862fe53defd04dd8f2",
    "etszombi_EU" => "02f65da26061d1b9f1756a274918a37e83086dbfe9a43d2f0b35b9d2f593b31907",
    "karasugoi_NA" => "024ba10f7f5325fd6ec6cab50c5242d142d00fab3537c0002097c0e98f72014177",
    "pirate_AR" => "0353e2747f89968741c24f254caec24f9f49a894a0039ee9ba09234fcbad75c77d",
    "metaphilibert_AR" => "0239e34ad22957bbf4c8df824401f237b2afe8d40f7a645ecd43e8f27dde1ab0da",
    "zatjum_SH" => "03643c3b0a07a34f6ae7b048832e0216b935408dfc48b0c7d3d4faceb38841f3f3",
    "madmax_AR" => "038735b4f6881925e5a9b14275af80fa2b712c8bd57eef26b97e5b153218890e38",
    "lukechilds_NA" => "024607d85ea648511fa50b13f29d16beb2c3a248c586b449707d7be50a6060cf50",
    "cipi_AR" => "025b7655826f5fd3a807cbb4918ef9f02fe64661153ca170db981e9b0861f8c5ad",
    "tonyl_AR" => "03a8db38075c80348889871b4318b0a79a1fd7e9e21daefb4ca6e4f05e5963569c",
    "infotech_DEV" => "0399ff59b0244103486a94acf1e4a928235cb002b20e26a6f3163b4a0d5e62db91",
    "fullmoon_NA" => "02adf6e3cb8a3c94d769102aec9faf2cb073b7f2979ce64efb1161a596a8d16312",
    "etszombi_AR" => "03c786702b81e0122157739c8e2377cf945998d36c0d187ec5c5ff95855848dfdd",
    "node-9_EU" => "024f2402daddee0c8169ccd643e5536c2cf95b9690391c370a65c9dd0169fc3dc6",
    "phba2061_EU" => "02dc98f064e3bf26a251a269893b280323c83f1a4d4e6ccd5e84986cc3244cb7c9",
    "indenodes_AR" => "0242778789986d614f75bcf629081651b851a12ab1cc10c73995b27b90febb75a2",
    "and1-89_EU" => "029f5a4c6046de880cc95eb448d20c80918339daff7d71b73dd3921895559d7ca3",
    "komodopioneers_SH" => "02ae196a1e93444b9fcac2b0ccee428a4d9232a00b3a508484b5bccaedc9bac55e",
    "komodopioneers_EU" => "03c7fef345ca6b5326de9d5a38498638801eee81bfea4ca8ffc3dacac43c27b14d",
    "d0ct0r_NA" => "0235b211469d7c1881d30ab647e0d6ddb4daf9466f60e85e6a33a92e39dedde3a7",
    "kolo_DEV" => "03dc7c71a5ef7104f81e62928446c4216d6e9f68d944c893a21d7a0eba74b1cb7c",
    "peer2cloud_AR" => "0351c784d966dbb79e1bab4fad7c096c1637c98304854dcdb7d5b5aeceb94919b4",
    "webworker01_SH" => "0221365d89a6f6373b15daa4a50d56d34ad1b4b8a48a7fd090163b6b5a5ecd7a0a",
    "webworker01_NA" => "03bfc36a60194b495c075b89995f307bec68c1bcbe381b6b29db47af23494430f9",
    "pbca26_NA" => "038319dcf74916486dbd506ac866d184c17c3202105df68c8335a1a1079ef0dfcc",
    "indenodes_SH" => "031d1584cf0eb4a2d314465e49e2677226b1615c3718013b8d6b4854c15676a58c",
    "pirate_NA" => "034899e6e884b3cb1f491d296673ab22a6590d9f62020bea83d721f5c68b9d7aa7",
    "lukechilds_AR" => "031ee242e67a8166e489c0c4ed1e5f7fa32dff19b4c1749de35f8da18befa20811",
    "dragonhound_NA" => "022405dbc2ea320131e9f0c4115442c797bf0f2677860d46679ac4522300ce8c0a",
    "fullmoon_AR" => "03cd152ae20adcc389e77acad25953fc2371961631b35dc92cf5c96c7729c2e8d9",
    "chainzilla_SH" => "03fe36ff13cb224217898682ce8b87ba6e3cdd4a98941bb7060c04508b57a6b014",
    "titomane_EU" => "03d691cd0914a711f651082e2b7b27bee778c1309a38840e40a6cf650682d17bb5",
    "jeezy_EU" => "022bca828b572cb2b3daff713ed2eb0bbc7378df20f799191eebecf3ef319509cd",
    "titomane_SH" => "038c2a64f7647633c0e74eec93f9a668d4bf80214a43ed7cd08e4e30d3f2f7acfb",
    "alien_AR" => "024f20c096b085308e21893383f44b4faf1cdedea9ad53cc7d7e7fbfa0c30c1e71",
    "pirate_EU" => "0371f348b4ac848cdfb732758f59b9fdd64285e7adf769198771e8e203638db7e6",
    "thegaltmines_NA" => "03e1d4cec2be4c11e368ff0c11e80cd1b09da8026db971b643daee100056b110fa",
    "computergenie_NA" => "02f945d87b7cd6e9f2173a110399d36b369edb1f10bdf5a4ba6fd4923e2986e137",
    "nutellalicka_SH" => "035ec5b9e88734e5bd0f3bd6533e52f917d51a0e31f83b2297aabb75f9798d01ef",
    "chainstrike_SH" => "0221f9dee04b7da1f3833c6ea7f7325652c951b1c239052b0dadb57209084ca6a8",
    "dwy_SH" => "02c593f32643f1d9af5c03eddf3e67d085b9173d9bc746443afe0abff9e5dd72f4",
    "alien_EU" => "022b85908191788f409506ebcf96a892f3274f352864c3ed566c5a16de63953236",
    "gt_AR" => "0307c1cf89bd8ed4db1b09a0a98cf5f746fc77df3803ecc8611cf9455ec0ce6960",
    "patchkez_SH" => "03d7c187689bf829ca076a30bbf36d2e67bb74e16a3290d8a55df21d6cb15c80c1",
    "decker_AR" => "02a85540db8d41c7e60bf0d33d1364b4151cad883dd032878ea4c037f67b769635"
);

// https://github.com/KomodoPlatform/komodo/blob/master/src/komodo_defs.h#L330
$Notaries_elected_S4_mainnet = Array(
    "alien_AR" => "03911a60395801082194b6834244fa78a3c30ff3e888667498e157b4aa80b0a65f",
    "alien_EU" => "03bb749e337b9074465fa28e757b5aa92cb1f0fea1a39589bca91a602834d443cd",
    "strob_NA" => "02a1c0bd40b294f06d3e44a52d1b2746c260c475c725e9351f1312e49e01c9a405",
    "titomane_SH" => "020014ad4eedf6b1aeb0ad3b101a58d0a2fc570719e46530fd98d4e585f63eb4ae",
    "fullmoon_AR" => "03b251095e747f759505ec745a4bbff9a768b8dce1f65137300b7c21efec01a07a",
    "phba2061_EU" => "03a9492d2a1601d0d98cfe94d8adf9689d1bb0e600088127a4f6ca937761fb1c66",
    "fullmoon_NA" => "03931c1d654a99658998ce0ddae108d825943a821d1cddd85e948ac1d483f68fb6",
    "fullmoon_SH" => "03c2a1ed9ddb7bb8344328946017b9d8d1357b898957dd6aaa8c190ae26740b9ff",
    "madmax_AR" => "022be5a2829fa0291f9a51ff7aeceef702eef581f2611887c195e29da49092e6de",
    "titomane_EU" => "0285cf1fdba761daf6f1f611c32d319cd58214972ef822793008b69dde239443dd",
    "cipi_NA" => "022c6825a24792cc3b010b1531521eba9b5e2662d640ed700fd96167df37e75239",
    "indenodes_SH" => "0334e6e1ec8285c4b85bd6dae67e17d67d1f20e7328efad17ce6fd24ae97cdd65e",
    "decker_AR" => "03ffdf1a116300a78729608d9930742cd349f11a9d64fcc336b8f18592dd9c91bc",
    "indenodes_EU" => "0221387ff95c44cb52b86552e3ec118a3c311ca65b75bf807c6c07eaeb1be8303c",
    "madmax_NA" => "02997b7ab21b86bbea558ae79acc35d62c9cedf441578f78112f986d72e8eece08",
    "chainzilla_SH" => "02288ba6dc57936b59d60345e397d62f5d7e7d975f34ed5c2f2e23288325661563",
    "peer2cloud_AR" => "0250e7e43a3535731b051d1bcc7dc88fbb5163c3fe41c5dee72bd973bcc4dca9f2",
    "pirate_EU" => "0231c0f50a06655c3d2edf8d7e722d290195d49c78d50de7786b9d196e8820c848",
    "webworker01_NA" => "02dfd5f3cef1142879a7250752feb91ddd722c497fb98c7377c0fcc5ccc201bd55",
    "zatjum_SH" => "036066fd638b10e555597623e97e032b28b4d1fa5a13c2b0c80c420dbddad236c2",
    "titomane_AR" => "0268203a4c80047edcd66385c22e764ea5fb8bc42edae389a438156e7dca9a8251",
    "chmex_EU" => "025b7209ba37df8d9695a23ea706ea2594863ab09055ca6bf485855937f3321d1d",
    "indenodes_NA" => "02698c6f1c9e43b66e82dbb163e8df0e5a2f62f3a7a882ca387d82f86e0b3fa988",
    "patchkez_SH" => "02cabd6c5fc0b5476c7a01e9d7b907e9f0a051d7f4f731959955d3f6b18ee9a242",
    "metaphilibert_AR" => "02adad675fae12b25fdd0f57250b0caf7f795c43f346153a31fe3e72e7db1d6ac6",
    "etszombi_EU" => "0341adbf238f33a33cc895633db996c3ad01275313ac6641e046a3db0b27f1c880",
    "pirate_NA" => "02207f27a13625a0b8caef6a7bb9de613ff16e4a5f232da8d7c235c7c5bad72ffe",
    "metaphilibert_SH" => "0284af1a5ef01503e6316a2ca4abf8423a794e9fc17ac6846f042b6f4adedc3309",
    "indenodes_AR" => "02ec0fa5a40f47fd4a38ea5c89e375ad0b6ddf4807c99733c9c3dc15fb978ee147",
    "chainmakers_NA" => "029415a1609c33dfe4a1016877ba35f9265d25d737649f307048efe96e76512877",
    "mihailo_EU" => "037f9563f30c609b19fd435a19b8bde7d6db703012ba1aba72e9f42a87366d1941",
    "tonyl_AR" => "0299684d7291abf90975fa493bf53212cf1456c374aa36f83cc94daece89350ae9",
    "alien_NA" => "03bea1ac333b95c8669ec091907ea8713cae26f74b9e886e13593400e21c4d30a8",
    "pungocloud_SH" => "025b97d8c23effaca6fa7efacce20bf54df73081b63004a0fe22f3f98fece5669f",
    "node9_EU" => "029ffa793b5c3248f8ea3da47fa3cf1810dada5af032ecd0e37bab5b92dd63b34e",
    "smdmitry_AR" => "022a2a45979a6631a25e4c96469423de720a2f4c849548957c35a35c91041ee7ac",
    "nodeone_NA" => "03f9dd0484e81174fd50775cb9099691c7d140ff00c0f088847e38dc87da67eb9b",
    "gcharang_SH" => "02ec4172eab854a0d8cd32bc691c83e93975a3df5a4a453a866736c56e025dc359",
    "cipi_EU" => "02f2b6defff1c544202f66e47cfd6909c54d67c7c39b9c2a99f137dbaf6d0bd8fa",
    "etszombi_AR" => "0329944b0ac65b6760787ede042a2fde0be9fca1d80dd756bc0ee0b98d389b7682",
    "pbca26_NA" => "0387e0fb6f2ca951154c87e16c6cbf93a69862bb165c1a96bcd8722b3af24fe533",
    "mylo_SH" => "03b58f57822e90fe105e6efb63fd8666033ea503d6cc165b1e479bbd8c2ba033e8",
    "swisscertifiers_EU" => "03ebcc71b42d88994b8b2134bcde6cb269bd7e71a9dd7616371d9294ec1c1902c5",
    "marmarachain_AR" => "035bbd81a098172592fe97f50a0ce13cbbf80e55cc7862eccdbd7310fab8a90c4c",
    "karasugoi_NA" => "0262cf2559703464151153c12e00c4b67a969e39b330301fdcaa6667d7eb02c57d",
    "phm87_SH" => "021773a38db1bc3ede7f28142f901a161c7b7737875edbb40082a201c55dcf0add",
    "oszy_EU" => "03d1ffd680491b98a3ec5541715681d1a45293c8efb1722c32392a1d792622596a",
    "chmex_AR" => "036c856ea778ea105b93c0be187004d4e51161eda32888aa307b8f72d490884005",
    "dragonhound_NA" => "0227e5cad3731e381df157de189527aac8eb50d82a13ce2bd81153984ebc749515",
    "strob_SH" => "025ceac4256cef83ca4b110f837a71d70a5a977ecfdf807335e00bc78b560d451a",
    "madmax_EU" => "02ea0cf4d6d151d0528b07efa79cc7403d77cb9195e2e6c8374f5074b9a787e287",
    "dudezmobi_AR" => "027ecd974ff2a27a37ee69956cd2e6bb31a608116206f3e31ef186823420182450",
    "daemonfox_NA" => "022d6f4885f53cbd668ad7d03d4f8e830c233f74e3a918da1ed247edfc71820b3d",
    "nutellalicka_SH" => "02f4b1e71bc865a79c05fe333952b97cb040d8925d13e83925e170188b3011269b",
    "starfleet_EU" => "025c7275bd750936862b47793f1f0bb3cbed60fb75a48e7da016e557925fe375eb",
    "mrlynch_AR" => "031987dc82b087cd53e23df5480e265a5928e9243e0e11849fa12359739d8b18a4",
    "greer_NA" => "03e0995615d7d3cf1107effa6bdb1133e0876cf1768e923aa533a4e2ee675ec383",
    "mcrypt_SH" => "025faab3cc2e83bf7dad6a9463cbff86c08800e937942126f258cf219bc2320043",
    "decker_EU" => "03777777caebce56e17ca3aae4e16374335b156f1dd62ee3c7f8799c6b885f5560",
    "dappvader_SH" => "02962e2e5af746632016bc7b24d444f7c90141a5f42ce54e361b302cf455d90e6a",
    "alright_DEV" => "02b73a589d61691efa2ada15c006d27bc18493fea867ce6c14db3d3d28751f8ce3",
    "artemii235_DEV" => "03bb616b12430bdd0483653de18733597a4fd416623c7065c0e21fe9d96460add1",
    "tonyl_DEV" => "02d5f7fd6e25d34ab2f3318d60cdb89ff3a812ec5d0212c4c113bb12d12616cfdc",
    "decker_DEV" => "028eea44a09674dda00d88ffd199a09c9b75ba9782382cc8f1e97c0fd565fe5707"
);

// https://github.com/KomodoPlatform/dPoW/blob/s4/iguana/3rd_party
$Notaries_elected_S4_3rdparty = Array(
    "alien_AR" => "024f20c096b085308e21893383f44b4faf1cdedea9ad53cc7d7e7fbfa0c30c1e71",
    "alien_EU" => "022b85908191788f409506ebcf96a892f3274f352864c3ed566c5a16de63953236",
    "strob_NA" => "02285bf2f9e96068ecac14bc6f770e394927b4da9f5ba833eaa9468b5d47f203a3",
    "titomane_SH" => "02abf206bafc8048dbdc042b8eb6b1e356ea5dbe149eae3532b4811d4905e5cf01",
    "fullmoon_AR" => "03639bc56d3fecf856f17759a441c5893668e7c2d460f3d216798a413cd6766bb2",
    "phba2061_EU" => "03369187ce134bd7793ee34af7756fe1ab27202e09306491cdd5d8ad2c71697937",
    "fullmoon_NA" => "03e388bcc579ac2675f8fadfa921eec186dcea8d2b43de1eed6caba23d5a962b74",
    "fullmoon_SH" => "03a5cfda2b097c808834ccdd805828c811b519611feabdfe6b3644312e53f6748f",
    "madmax_AR" => "027afddbcf690230dd8d435ec16a7bfb0083e6b77030f763437f291dfc40a579d0",
    "titomane_EU" => "02276090e483db1a01a802456b10831b3b6e0a6ad3ece9b2a01f4aad0e480c8edc",
    "cipi_NA" => "03f4e69edcb4fa3b2095cb8cb1ca010f4ec4972eac5d8822397e5c8d87aa21a739",
    "indenodes_SH" => "031d1584cf0eb4a2d314465e49e2677226b1615c3718013b8d6b4854c15676a58c",
    "decker_AR" => "02a85540db8d41c7e60bf0d33d1364b4151cad883dd032878ea4c037f67b769635",
    "indenodes_EU" => "03a416533cace0814455a1bb1cd7861ce825a543c6f6284a432c4c8d8875b7ace9",
    "madmax_NA" => "036d3afebe1eab09f4c38c3ee6a4659ad390f3df92787c11437a58c59a29e408e6",
    "chainzilla_SH" => "0311dde03c2dd654ce78323b718ed3ad73a464d1bde97820f3395f54788b5420dd",
    "peer2cloud_AR" => "0243958faf9ae4d43b598b859ddc595c170c4cf50f8e4517d660ae5bc72aeb821b",
    "pirate_EU" => "0240011b95cde819f298fe0f507b2260c9fecdab784924076d4d1e54c522103cb1",
    "webworker01_NA" => "02de90c720c007229374772505a43917a84ed129d5fbcfa4949cc2e9b563351124",
    "zatjum_SH" => "0241c5660ca540780be66603b1791127a1261d56abbcb7562c297eec8e4fc078fb",
    "titomane_AR" => "03958bd8d13fe6946b8d0d0fbbc3861c72542560d0276e80a4c6b5fe55bc758b81",
    "chmex_EU" => "030bf7bd7ad0515c33b5d5d9a91e0729baf801b9002f80495ae535ea1cebb352cb",
    "indenodes_NA" => "02b3908eda4078f0e9b6704451cdc24d418e899c0f515fab338d7494da6f0a647b",
    "patchkez_SH" => "028c08db6e7242681f50db6c234fe3d6e12fb1a915350311be26373bac0d457d49",
    "metaphilibert_AR" => "0239e34ad22957bbf4c8df824401f237b2afe8d40f7a645ecd43e8f27dde1ab0da",
    "etszombi_EU" => "03a5c083c78ba397970f20b544a01c13e7ed36ca8a5ae26d5fe7bd38b92b6a0c94",
    "pirate_NA" => "02ad7ef25d2dd461e361120cd3efe7cbce5e9512c361e9185aac33dd303d758613",
    "metaphilibert_SH" => "03b21ff042bf1730b28bde43f44c064578b41996117ac7634b567c3773089e3be3",
    "indenodes_AR" => "0242778789986d614f75bcf629081651b851a12ab1cc10c73995b27b90febb75a2",
    "chainmakers_NA" => "028803e07bcc521fde264b7191a944f9b3612e8ee4e24a99bcd903f6976240839a",
    "mihailo_EU" => "036494e7c9467c8c7ff3bf29e841907fb0fa24241866569944ea422479ec0e6252",
    "tonyl_AR" => "0229e499e3f2e065ced402ceb8aaf3d5ab8bd3793aa074305e9fa30772ce604908",
    "alien_NA" => "022f62b56ddfd07c9860921c701285ac39bb3ac8f6f083d1b59c8f4943be3de162",
    "pungocloud_SH" => "02641c36ae6747b88150a463a1fe65cf7a9d1c00a64387c73f296f0b64e77c7d3f",
    "node9_EU" => "0392e4c9400e69f28c6b9e89d586da69d5a6af7702f1045eaa6ebc1996f0496e1f",
    "smdmitry_AR" => "0397b7584cb29717b721c0c587d4462477efc1f36a56921f133c9d17b0cd7f278a",
    "nodeone_NA" => "0310a249c6c2dcc29f2135715138a9ddb8e01c0eab701cbd0b96d9cec660dbdc58",
    "gcharang_SH" => "02a654037d12cdd609f4fad48e15ec54538e03f61fdae1acb855f16ebacac6bd73",
    "cipi_EU" => "026f4f66385daaf8313ef30ffe4988e7db497132682dca185a70763d93e1417d9d",
    "etszombi_AR" => "03bfcbca83f11e622fa4eed9a1fa25dba377981ea3b22e3d0a4015f9a932af9272",
    "pbca26_NA" => "03c18431bb6bc95672f640f19998a196becd2851d5dcba4795fe8d85b7d77eab81",
    "mylo_SH" => "026d5f29d09ff3f33e14db4811606249b2438c6bcf964876714f81d1f2d952acde",
    "swisscertifiers_EU" => "02e7722ebba9f8b5ebfb4e87d4fa58cc75aef677535b9cfc060c7d9471aacd9c9e",
    "marmarachain_AR" => "028690ca1e3afdf8a38b421f6a41f5ff407afc96d5a7a6a488330aae26c8b086bb",
    "karasugoi_NA" => "02f803e6f159824a181cc5d709f3d1e7ff65f19e1899920724aeb4e3d2d869f911",
    "phm87_SH" => "03889a10f9df2caef57220628515693cf25316fe1b0693b0241419e75d0d0e66ed",
    "oszy_EU" => "03c53bd421de4a29ce68c8cc83f802e1181e77c08f8f16684490d61452ea8d023a",
    "chmex_AR" => "030cd487e10fbf142e0e8d582e702ecb775f378569c3cb5acd0ff97b6b12803588",
    "dragonhound_NA" => "029912212d370ee0fb4d38eefd8bfcd8ab04e2c3b0354020789c29ddf2a35c72d6",
    "strob_SH" => "0213751a1c59d3489ca85b3d62a3d606dcef7f0428aa021c1978ea16fb38a2fad6",
    "madmax_EU" => "0397ec3a4ad84b3009566d260c89f1c4404e86e5d044964747c9371277e38f5995",
    "dudezmobi_AR" => "033c121d3f8d450174674a73f3b7f140b2717a7d51ea19ee597e2e8e8f9d5ed87f",
    "daemonfox_NA" => "023c7584b1006d4a62a4b4c9c1ede390a3789316547897d5ed49ff9385a3acb411",
    "nutellalicka_SH" => "0284c4d3cb97dd8a32d10fb32b1855ae18cf845dad542e3b8937ca0e998fb54ecc",
    "starfleet_EU" => "03c6e047218f34644ccba67e317b9da5d28e68bbbb6b9973aef1281d2bafa46496",
    "mrlynch_AR" => "03e67440141f53a08684c329ebc852b018e41f905da88e52aa4a6dc5aa4b12447a",
    "greer_NA" => "0262da6aaa0b295b8e2f120035924758a4a630f899316dc63ee15ef03e9b7b2b23",
    "mcrypt_SH" => "027a4ca7b11d3456ff558c08bb04483a89c7f383448461fd0b6b3b07424aabe9a4",
    "decker_EU" => "027777775b89ff548c3be54fb0c9455437d87f38bfce83bdef113899881b219c9e",
    "dappvader_SH" => "025199bc04bcb8a17976d9fe8bc87763a6150c2727321aa59bf34a2b49f2f3a0ce",
    "alright_DEV" => "03b6f9493658bdd102503585a08ae642b49d6a68fb69ac3626f9737cd7581abdfa",
    "artemii235_DEV" => "037a20916d2e9ea575300ac9d729507c23a606b9a200c8e913d7c9832f912a1fa7",
    "tonyl_DEV" => "0258b77d7dcfc6c2628b0b6b438951a6e74201fb2cd180a795e4c37fcf8e78a678",
    "decker_DEV" => "02fca8ee50e49f480de275745618db7b0b3680b0bdcce7dcae7d2e0fd5c3345744"
);

function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       


    $data["result"] = curl_exec($ch);
    $data["http_code"] = curl_getinfo($ch)["http_code"];
    curl_close($ch);

    return $data;
}


require_once 'BitcoinECDSA.php/src/BitcoinPHP/BitcoinECDSA/BitcoinECDSA.php';
use BitcoinPHP\BitcoinECDSA\BitcoinECDSA;

class BitcoinECDSADecker extends BitcoinECDSA {

    /***
     * Tests if the address is valid or not.
     *
     * @param string $address (base58)
     * @return bool
     */
    public function validateAddress($address)
    {
        $address    = hex2bin($this->base58_decode($address));

        /*
        if(strlen($address) !== 25)
            return false;
        $checksum   = substr($address, 21, 4);
        $rawAddress = substr($address, 0, 21);
	*/

	$len = strlen($address);
        $checksum   = substr($address, $len-4, 4);
        $rawAddress = substr($address, 0, $len-4);

        if(substr(hex2bin($this->hash256($rawAddress)), 0, 4) === $checksum)
            return true;
        else
            return false;
    }

    /**
     * Returns the current network prefix for WIF, '80' = main network, 'ef' = test network.
     *
     * @return string (hexa)
     */
    public function getPrivatePrefix($PrivatePrefix = 128){

        if($this->networkPrefix =='6f')
            return 'ef';
        else
           return sprintf("%02X",$PrivatePrefix);
    }
    /***
     * returns the private key under the Wallet Import Format
     *
     * @return string (base58)
     * @throws \Exception
     */

    public function getWIF($compressed = true, $PrivatePrefix = 128)
    {
        if(!isset($this->k))
        {
            throw new \Exception('No Private Key was defined');
        }

        $k          = $this->k;
        
        while(strlen($k) < 64)
            $k = '0' . $k;
        
        $secretKey  =  $this->getPrivatePrefix($PrivatePrefix) . $k;
        
        if($compressed) {
            $secretKey .= '01';
        }
        
        $secretKey .= substr($this->hash256(hex2bin($secretKey)), 0, 8);

        return $this->base58_encode($secretKey);
    }
}

function gettemplate($needfund_addresses, $amount = 0.77777777, $command = "") {
    $template = "";
    $template .= $command . 'sendmany "" "{';
        $i = 0;
        foreach ($needfund_addresses as $nf) {
               $template .=  '\"'.$nf.'\":' . $amount . (($i < count($needfund_addresses)-1) ? ',' : '');
               $i++;
        }
        $template .= '}" 1 ""';
    return $template;
}

function GenAddressesTable($nnelected, $title, $kmdonly, $id) {

    echo '<h3 name="'.$id.'">'.$title.'</h3>';
    echo '<table id="'.$id.'" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%"><thead>
    <tr>
        <th>Index</th>
        <th>Name</th>';
    if ($kmdonly || $id == "season2-mainnet")
    echo '      
        <th>BTC</th>';
    echo '      
        <th>KMD</th>';
    if (!$kmdonly)
    echo'      
    <th>EMC2</th>
    <th>GIN</th>
    <th>AYA</th>
    <th>GLEEC</th>';
    echo'</tr>
    </thead>
    <tbody>' . PHP_EOL;

    $bitcoinECDSA = new BitcoinECDSADecker();

    $index = 0;

    $btc_addresses = Array();
    $kmd_addresses = Array();
    $emc2_addresses = Array();
    $gin_addresses = Array();
    $aya_addresses = Array();
    $gleec_addresses = Array();

    foreach ($nnelected as $key => $value) {

        $bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 0)); // 0 - Bitcoin
        $btc_address = $bitcoinECDSA->getUncompressedAddress(true, $value);
        $bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 60)); // 60 - Komodo
        $kmd_address = $bitcoinECDSA->getUncompressedAddress(true, $value);

        /*
        $bitcoinECDSA->setNetworkPrefix("1cb8"); // Hush
            $hush_address = $bitcoinECDSA->getUncompressedAddress(true, $value); */

        $bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 33)); // 33 - EMC2
        $emc2_address = $bitcoinECDSA->getUncompressedAddress(true, $value);
        
        $bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 38)); 
        $gin_address = $bitcoinECDSA->getUncompressedAddress(true, $value);

        $bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 23)); 
        $aya_address = $bitcoinECDSA->getUncompressedAddress(true, $value);

        $bitcoinECDSA->setNetworkPrefix(sprintf("%02X", 35));
        $gleec_address = $bitcoinECDSA->getUncompressedAddress(true, $value);

        //echo "[".sprintf("%02d",$index)."] ". sprintf("%20s",$key) . "" . sprintf("%36s",$address) . PHP_EOL;
        
        $btc_addresses[] = $btc_address;
        $kmd_addresses[] = $kmd_address;
        $emc2_addresses[] = $emc2_address;
        $gin_addresses[] = $gin_address;
        $aya_addresses[] = $aya_address;
        $gleec_addresses[] = $gleec_address;

        echo '
            <tr>
            <td>'.sprintf("%02d",$index).'</td>
                <td data-toggle="tooltip" title="'. $value .'">'.$key.'</td>';
        if ($kmdonly || $id == "season2-mainnet")
        echo '            
                <td><a href="https://blockchain.info/address/'.$btc_address.'" target="_blank">'.$btc_address.'</a></td>';
        echo '            
                <td><a href="https://kmdexplorer.io/address/'.$kmd_address.'" target="_blank">'.$kmd_address.'</a></td>';
        if (!$kmdonly)
        echo '
                <td><a href="https://chainz.cryptoid.info/emc2/address.dws?'.$emc2_address.'.htm" target="_blank">'.$emc2_address.'</a></td>
                <td><a href="https://explorer.gincoin.io/address/'.$gin_address.'" target="_blank">'.$gin_address.'</a></td>
                <td><a href="https://ayaexplorer.guarda.co/address/'.$aya_address.'" target="_blank">'.$aya_address.'</a></td>
                <td><a href="https://gleechain.com/address/'.$gleec_address.'" target="_blank">'.$gleec_address.'</a></td>';
        echo '
            </tr>
    ';

        $index++;
}

echo '      </tbody>
   </table>';

// fund commands templates

echo '
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse-'.$id.'" aria-expanded="false" aria-controls="collapse-'.$id.'">
    Sendmany Templates
  </button>
<div class="collapse" id="collapse-'.$id.'">
  <div class="card card-body"><p>
  ';

if ($kmdonly || $id == "season2-mainnet") {
    $template = gettemplate($btc_addresses);
    echo '<div class="daemon-cli-snippet"><p><strong>BTC</strong></p><p>Command snippet:</p><div class="highlight"><pre>'.$template.'</pre></div></div>';
}

$template = gettemplate($kmd_addresses);
echo '<div class="daemon-cli-snippet"><p><strong>KMD</strong></p><p>Command snippet:</p><div class="highlight"><pre>'.$template.'</pre></div></div>';

if (!$kmdonly) {

    $template = gettemplate($gin_addresses);
    echo '<div class="daemon-cli-snippet"><p><strong>GIN</strong></p><p>Command snippet:</p><div class="highlight"><pre>'.$template.'</pre></div></div>';
    $template = gettemplate($emc2_addresses);
    echo '<div class="daemon-cli-snippet"><p><strong>EMC2</strong></p><p>Command snippet:</p><div class="highlight"><pre>'.$template.'</pre></div></div>';
    $template = gettemplate($aya_addresses);
    echo '<div class="daemon-cli-snippet"><p><strong>AYA</strong></p><p>Command snippet:</p><div class="highlight"><pre>'.$template.'</pre></div></div>';
    $template = gettemplate($gleec_addresses);
    echo '<div class="daemon-cli-snippet"><p><strong>GLEEC</strong></p><p>Command snippet:</p><div class="highlight"><pre>'.$template.'</pre></div></div>';
}

echo '</div></div>
';

} 

GenAddressesTable($Notaries_elected_S4_mainnet,"Notaries (S4 Mainnet)", true, "season4-mainnet");
GenAddressesTable($Notaries_elected_S4_3rdparty,"Notaries (S4 3rd-party)", false, "season4-3rdparty");

GenAddressesTable($Notaries_elected_S3_mainnet,"Notaries (S3 Mainnet)", true, "season3-mainnet");
GenAddressesTable($Notaries_elected_S3_3rdparty,"Notaries (S3 3rd-party)", false, "season3-3rdparty");
GenAddressesTable($Notaries_elected_S2_mainnet,"Notaries (S2)", false, "season2-mainnet");


echo '
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  $("#season2-mainnet").DataTable();
  $("#season3-mainnet").DataTable();
  $("#season3-3rdparty").DataTable();
  $("#season4-mainnet").DataTable();
  $("#season4-3rdparty").DataTable();
});';

echo '
</script>
';

?>