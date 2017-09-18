<?php

use Illuminate\Database\Seeder;

class AnimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('animes')->insert([
            'title' => 'Accel world',
            'status' =>'fini' ,
            'pictures' =>'accel_world.jpg' ,
            'vod' =>'https://www.adkami.com/anime/55',
            'summary' => 'En 2046, la technologie a fait naître le Neuro-Linker (dernière évolution du Nerve-Gear apparaissant dans Sword Art Online, light novel écrit par le même auteur), un système qui permet à l\'utilisateur de manipuler ses cinq sens pour accéder à une réalité augmentée et rechercher des informations sur Internet, mais qui permet aussi d\'entrer dans un univers virtuel sous la forme d\'un avatar choisi. Le jeune Haruyuki Arita, petit, gros, timide, est le souffre-douleur d\'une bande de loubards de son collège. Son seul refuge, là où il se sent libre et doué pour quelque chose, se trouve dans l\'univers virtuel du réseau de l\'établissement, où il est le meilleur joueur d\'un jeu de squash … jusqu\'au jour où la plus belle fille de son école vient l\'y trouver et lui donne rendez-vous dans le monde réel pour discuter. Une rencontre qui va bouleverser la vie de Haruyuki. Elle lui apprend en effet l\'existence du monde accéléré et lui partage une application, le Brain Burst, qui s\'installe directement dans le Neuro-Linker, mais qui implique certaines contreparties … Une nouvelle aventure, en tant que Silver Crow, commence alors pour Haruyuki dans le monde accéléré de Brain Burst.',
            'note' => '6',
            'season' => '1',
            'episode' => '24',
            'licenced' => '0',

        ]);


 DB::table('animes')->insert([
            'title' => 'Aldnoah.Zero',
            'status' => 'fini',
            'pictures' => 'aldnoah_Zero.jpg',
            'vod' =>'http://www.crunchyroll.com/aldnoahzero',
            'summary' => 'Dans un présent alternatif, les Humains se sont séparés à la suite de la découverte sur la Lune d\'un portail menant vers Mars par Apollo 17. Ceux qui ont quitté la Terre forment l\'Empire de Vers, une société très avancée technologiquement grâce à la découverte d\'une nouvelle forme d\'énergie (l\'Aldnoah) mais proche de la guerre civile. En effet, la planète rouge manque de toutes les ressources vitales et les inégalités se creusent entre la classe dominante et la classe ouvrière. Une courte guerre en 1999 entre la Terre et Mars éclate, conduisant à la destruction d\'une grande partie de la Lune, ces débris causant de très importants dégâts à la surface de la Terre.

De plus, l\'Empereur est extrêmement affaibli par la vieillesse et délaisse toute la gestion de la planète. Profitant de sa faiblesse, les Chevaliers Orbitaux nouent des alliances et attendent la moindre occasion pour attaquer la Terre, riche en ressources.

En 2014, la jeune princesse héritière, Asseylum Vers Allusia, est malgré tout déterminée à apaiser les relations entre les deux planètes. Ignorante des alliances qui se jouent autour d\'elle, elle sollicite le Comte Cruhteo pour se rendre sur la planète bleue. Malheureusement, dans un climat de haute tension, un attentat est commis durant la visite diplomatique de la jeune fille. Il n\'en fallait pas moins pour attiser la colère des Chevaliers Orbitaux qui annoncent l\'entrée en guerre de Mars contre la Terre...',
            'note' =>'7' ,
            'season' =>'2' ,
            'episode' => '24',
            'licenced' =>'1' ,

        ]); DB::table('animes')->insert([
            'title' => 'Charlotte',
            'status' => 'fini',
            'pictures' =>'charlotte.jpg' ,
            'vod' =>'https://www.wakanim.tv/fr/v2/catalogue/episode/1279/charlotte-episode-1',
            'summary' => 'Yû Otosaka, jeune étudiant, est doté de pouvoirs surnaturels : il peut posséder n’importe qui dans son champ de vision pendant cinq secondes. Utilisant son pouvoir pour tricher aux examens, il se fait repérer par Nao Tomori, elle aussi détentrice d’un pouvoir étrange et membre du conseil des élèves de la prestigieuse académie Hoshinômi. Ces pouvoirs, qui émergent pendant la période de l’adolescence et disparaissent à l’âge adulte, touchent un certain nombre de jeunes sous une forme bénigne, maîtrisée ou encore dangereuse. Leurs origines sont cependant inconnues, et peu de gens en dehors des détenteurs en connaissent l\'existence. Néanmoins, ces adolescents sont fortement recherchés par plusieurs groupes de scientifiques souhaitant les utiliser comme cobayes. Après son transfert, la nouvelle mission de Yû au sein du conseil étudiant de Hoshinômi sera de protéger les autres jeunes de son âge en les avertissant de la dangerosité de l\'utilisation de leurs abilités.',
            'note' => '7',
            'season' => '1',
            'episode' => '13',
            'licenced' =>'1' ,

        ]); DB::table('animes')->insert([
            'title' =>'Boku hero no academia' ,
            'status' => 'fini',
            'pictures' =>'boku_hero_no_academia.jpg' ,
            'vod' =>'http://animedigitalnetwork.fr/video/my-hero-academia',
            'summary' => 'Dans un monde où les super-pouvoirs sont normaux, où l\'humanité est souvent menacée par l\'attaque de divers monstres, la plupart des humains sont dotés d\'un pouvoir particulier nommé "Alter" (個性, Kosei?). Grâce à celui-ci, devenir un héros n\'est pas impossible pour eux. Le manga suit les aventures de Izuku Midoriya, l\'un des rares humains ne possédant pas d\'alter, qui rêve pourtant de rejoindre la filière super-héroïque du grand lycée Yūei (雄英高校, Yūei Kōkō?) et de devenir un jour un des plus grands héros de son époque!',
            'note' =>'9' ,
            'season' => '2',
            'episode' => '38',
            'licenced' =>'1' ,

        ]); DB::table('animes')->insert([
            'title' => 'Gangsta',
            'status' =>'fini' ,
            'pictures' =>'gangsta.jpg' ,
            'vod' =>'http://www.crunchyroll.com/gangsta/episode-1-naughty-boys-682683',
            'summary' => 'Arcangelo, deux tueurs à gages aux personnalités opposées : le premier est sourd, taciturne et secret tandis que le second est vantard et coureur de jupons. Ils vivent à Ergastulum, une ville contrôlée par la mafia et les gangs, et gagnent leur vie en accomplissant diverses tâches rémunérées allant de la livraison aux assassinats sous le couvert de leur "agence" de "services en tout genre". Leurs vies vont être chamboulées lorsqu\'ils vont rencontrer Alex, une prostituée qui cherche à échapper à la pègre... C\'est alors que la nouvelle venue découvre que Nick est un "indexé", ou "crépusculaire".',
            'note' => '7',
            'season' => '1',
            'episode' =>'12' ,
            'licenced' =>'1' ,

        ]); DB::table('animes')->insert([
            'title' =>'Kuroko no basket' ,
            'status' => 'fini',
            'pictures' =>'kuroko_no_basket.jpg' ,
            'vod' =>'http://animedigitalnetwork.fr/video/kuroko_basket',
            'summary' => 'Dans le collège Teikô, le club de Basketball était connu pour être l\'un des meilleurs du pays. Au sein de l\'établissement, cinq génies du sport étaient connus sous le nom de « Génération Miracles » (キセキの世代, Kiseki no Sedai?). Toutefois, les cinq membres considéraient un sixième joueur comme un élément tout aussi prodigieux qu\'ils ne l\'étaient : le joueur fantôme. À la fin de leur scolarité dans le collège de Teikô, les cinq prodiges se dispersèrent dans des lycées de renommés, désirant chacun mener leur équipe au sommet.',
            'note' => '7',
            'season' => '3',
            'episode' => '75',
            'licenced' =>'1' ,

        ]); DB::table('animes')->insert([
            'title' =>'No game no life' ,
            'status' => 'fini',
            'pictures' =>'no_game no_life.jpg' ,
            'vod' =>'http://animedigitalnetwork.fr/video/no-game-no-life/5000-episode-1-debutant',
            'summary' => 'Sora et Shiro sont deux frères et sœurs inséparables, autant dans la réalité que dans les jeux vidéo (ils ne sont en réalité pas frère et sœur mais se considèrent comme tel). En équipe, leurs compétences individuelles les rendent invincibles : Sora (空?, ciel, espace, vide) a une intuition astucieuse, une grande culture, une très grande intelligence et une perspicacité sans faille, tandis que Shiro (白?, blanc) possède une intelligence dépassant le génie. Dans le vrai monde, ils sont reclus, asociaux et hikikomoris. Dans le monde du jeu vidéo, ils jouent ensemble en tant que 『　　』 (un espace vide), un groupe mystérieux de joueurs en ligne ne connaissant pas la défaite, finissant premier à tous les jeux auxquels ils participent. Du fait que les noms des comptes des personnages soient toujours un espace vide, ils sont connus sous le nom de « Blanc » (空白, kūhaku?, litt. Espace blanc).',
            'note' => '9',
            'season' => '1',
            'episode' => '12',
            'licenced' => '1',

        ]); DB::table('animes')->insert([
            'title' =>'Owari no seraph' ,
            'status' => 'fini',
            'pictures' => 'owari_no_seraph.jpg',
            'vod' =>'https://www.wakanim.tv/fr/v2/catalogue/show/106/seraph-of-the-end',
            'summary' => 'Le monde est ravagé par une terrible maladie. Les enfants de moins de 13 ans étant, pour une raison inconnue, immunisés contre le virus, ont survécu. Mais ces derniers ont été réduits en esclavage par des vampires qui sont tout à coup sortis des profondeurs de la Terre. Yûichirô Hyakuya et Mikael Hyakuya, deux orphelins, servent de « garde-manger » aux vampires : ils ont le droit de vivre, en échange d\'un prélèvement quotidien de leur sang. Après une tentative d\'évasion qui se solde par un massacre de ses amis, Yûichirô réussit à s\'échapper, en laissant pour mort Mikael. Arrivé à la surface, Yûichirô apprend que l\'Humanité n\'est pas entièrement décimée, et il rejoint les rangs de "l\'Armée Impériale du Japon", qui a pour but d\'exterminer les vampires.',
            'note' => '10',
            'season' => '2',
            'episode' => '24',
            'licenced' => '1',

        ]);
        DB::table('animes')->insert([
            'title' =>'Zetsuen no tempest' ,
            'status' => 'fini',
            'pictures' => 'zetsuen_no_tempest.jpg',
            'vod' =>'https://www.adkami.com/anime/194/1/1/2/1/',
            'summary' => 'Yoshino Takigawa et Mahiro Fuwa, amis malgré leur différence de caractère et leur tempérament solitaire, voient leur vie bouleversée le jour où la sœur adoptive de Mahiro, Aika Fuwa, est retrouvée assassinée dans des circonstances mystérieuses. Après avoir disparu sans laisser de traces, Mahiro réapparaît doté de pouvoirs magiques, sauvant Yoshino d\'une obscure organisation para-gouvernementale enquêtant sur la « maladie du fer » qui transforme en métal les êtres vivants inspirant les particules émises par de gigantesques fruits. Les deux lycéens parviennent à communiquer à distance avec une puissante sorcière, Hakaze Kusaribe, privée de ses pouvoirs sur une île déserte à la suite d\'un complot fomenté par son propre clan qui tente de faire revenir à la vie « l\'Arbre de la Destruction », trahissant ainsi « l\'Arbre des Origines », le protecteur d\'Hakaze, qu\'ils sont censés servir. Lorsque cette dernière leur révèle que le crime est peut-être lié à ce rituel de résurrection, Mahiro et Yoshino partent à la recherche de « l\'Arbre de la Destruction » afin de sauver le monde, dans le seul but de découvrir l\'identité du meurtrier d\'Aika.',
            'note' => '8',
            'season' => '1',
            'episode' => '24',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'Bakuon!!' ,
            'status' => 'fini',
            'pictures' => 'bakuon.jpg',
            'vod' =>'https://www.wakanim.tv/fr/v2/catalogue/episode/1771/',
            'summary' => 'Sakura Hane doit utiliser son vélo pour rejoindre son lycée. Mais alors qu\'elle croise le chemin de Onsa Amano, qui vient en cours en moto, Sakura commence elle aussi à s\'y intéresser !',
            'note' => '2',
            'season' => '1',
            'episode' => '12',
            'licenced' => '1',

        ]);
        DB::table('animes')->insert([
            'title' =>'JoJo\'s Bizarre Adventure' ,
            'status' => 'en cours',
            'pictures' => 'jojos_bizarre_adventure.jpg',
            'vod' =>'http://www.crunchyroll.com/jojos-bizarre-adventure',
            'summary' => 'Dans l’ancienne civilisation des Aztèques, le peuple du Soleil avait en sa possession un masque de pierre appelé, Le Masque Miraculeux. Ce masque confère à celui qui le porte, la vie éternelle et un immense pouvoir. Personne ne connait son origine, ni ce qu’il est devenu depuis… L’histoire se déroule au 19ème siècle en Angleterre. Lord Joestar adopte un jeune enfant nommé Dio. Cependant, Dio se révèle être très ambitieux et rejette continuellement l’amitié de Jonathan, le fils naturel de Lord Joestar. Un jour, Dio trouve un ancien masque de pierre datant de la civilisation Aztèque…',
            'note' => '7',
            'season' => '4',
            'episode' => '103',
            'licenced' => '1',

        ]);
        DB::table('animes')->insert([
            'title' =>'Abenobashi' ,
            'status' => 'fini',
            'pictures' => 'abenobashi.jpg',
            'vod' =>'https://www.adkami.com/anime/615/1/1/2/1/',
            'summary' => 'La série se déroule dans l\'arrondissement Abeno d\'Osaka, plus particulièrement son quartier commerçant, à l\'époque actuelle (entre autres). Dans le quartier, la plupart des magasins ont fermé, et le district doit être redéveloppé. Le grand-père d\'Arumi tient l\'un des derniers commerces ouverts, et il refuse de fermer. Les deux protagonistes principaux, Sasshi et Arumi, se retrouveront projetés dans des univers chaque fois différents (et parodiant un genre bien particulier) mais toujours autour du quartier commercial d\'Abeno. Chaque épisode représente ainsi le quartier commercial dans un univers différent, allant de la science-fiction au Moyen Âge, en passant par Hollywood ou les séries japonaises romantiques, chacun avec leur lot de parodies.',
            'note' => '6',
            'season' => '1',
            'episode' => '13',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'Absolute Duo' ,
            'status' => 'fini',
            'pictures' => 'absolute_duo.jpg',
            'vod' =>'https://www.adkami.com/anime/1325',
            'summary' => 'En ce monde, il existe des armes qui sont la manifestation de l\'âme humaine, elles sont appelées Blaze. Notre héros Tôru Kokonoe s\'inscrit à l\'Académie Kouryou qui enseigne des techniques de combat via un système de partenariat entre élèves appelé Duo et en réussissant les qualifications , il intégra l\'Académie mais pour une raison inconnu son Blaze n\'est pas une arme, mais un bouclier. Il aura par la suite pour partenaire une belle jeune fille aux cheveux argentés nommé Julie Sigtuna.',
            'note' => '5',
            'season' => '1',
            'episode' => '12',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'Air gear' ,
            'status' => 'fini',
            'pictures' => 'air_gear.jpg',
            'vod' =>'https://www.adkami.com/anime/231',
            'summary' => 'Dans un futur proche, les évolutions technologiques ont permis de créer des rollers contenant un moteur surpuissant, appelés AT (Air Trecks), avec lesquels il est possible d\'effectuer des figures et des sauts défiant quasiment les lois de la gravité. Les amateurs de ce sport se rassemblent en groupes (gangs).

Itsuki « Ikki » Minami est un collégien plutôt bagarreur vivant chez quatre filles qu\'il considère comme ses sœurs qui l\'ont recueilli alors qu\'il était encore très jeune. L\'une d\'entre elles, Ringo, est secrètement amoureuse de lui. Ikki est le leader des "Higashi Guns" (ou Higachû) et se fait appeler "Babyface" par ses amis. Selon eux, il n\'aurait aucun adversaire à sa taille au combat de rue. Il se bat un jour avec un gang de Storm Riders mais se fait battre à plate couture. Pour se venger, il décide de voler une paire de AT à l\'une de ses sœurs. Depuis quelque temps, Ikki est intrigué par ces rollers, en partie à cause d\'une fille qu\'il vient voir s\'entraîner et dont il est tombé amoureux. Il décide finalement de combattre ce gang, les Skull Saders, avec l\'aide de ses sœurs qui forment en fait un gang appelé les "Sleeping Forest". Après ce combat, il se découvrira d\'étonnantes capacités pour ces Air Trecks et finira finalement par former son propre gang de riders.',
            'note' => '6',
            'season' => '1',
            'episode' => '25',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'Akame ga kill!' ,
            'status' => 'fini',
            'pictures' => 'akame_ga_kill.jpg',
            'vod' =>'http://animedigitalnetwork.fr/video/red_eyes_sword_akame_ga_kill/5184-episode-1-mort-aux-tenebres',
            'summary' => 'Tatsumi est un combattant qui part pour la capitale à la recherche d\'un moyen de gagner de l\'argent pour aider son village pauvre. Après avoir été victime d\'un vol par une femme et avoir perdu tout son argent, Tatsumi est pris en charge par une aristocrate du nom d\'Aria. La nuit suivante, le manoir d\'Aria est attaqué par un groupe d\'assassins connus sous le nom de Night Raid. Alors que Tatsumi tente de défendre Aria de l\'assassin Akame, un autre membre du groupe met fin au combat. Il révèle qu\'Aria a enlevé plusieurs villageois et les a torturés pour son plaisir. Choqué en découvrant les villageois torturés, qui incluent ses deux meilleurs amis, Tatsumi tue Aria. Après avoir vu le potentiel de Tatsumi, les Night Raid invitent le garçon dans leur groupe et le préviennent que peu importe leur manière d\'assassiner les corrompus, ils restent des assassins. Tatsumi accepte afin de devenir plus fort et de sauver la capitale. Dans leur lutte contre l\'Empire, les Night Raid se défendent face à un groupe d\'élite connu sous le nom de Jaegers, mené par Esdeath, la combattante la plus puissante de l\'Empire.',
            'note' => '5',
            'season' => '1',
            'episode' => '24',
            'licenced' => '1',

        ]);
        DB::table('animes')->insert([
            'title' =>'Akuma no riddle' ,
            'status' => 'fini',
            'pictures' => 'akuma_no_riddle.jpg',
            'vod' =>'https://www.adkami.com/anime/1095',
            'summary' => 'L’histoire se déroule à l’académie privée Myojo réservée exclusivement aux jeunes filles. Cependant, les élèves de la classe Kurogumi sont en réalité des assassins avec une cible; Haru Ichinose. Nous suivons le quotidien de Tokaku Azuma, une étudiante fraîchement transférée, qui vise également Ichinose. Mais peu à peu elle développe des sentiments pour Ichinose…',
            'note' => '7',
            'season' => '1',
            'episode' => '12',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'Btooom!' ,
            'status' => 'fini',
            'pictures' => 'btooom.jpg',
            'vod' =>'http://www.adkami.com/index.php?page=manga&id=193&episode=1&version=2&genre=1',
            'summary' => 'Ryota Sakamoto est un jeune homme adepte du jeu Btooom! et classé 10e meilleur joueur au monde. Mais du jour au lendemain, sans savoir pourquoi, il est enlevé par des hommes en noir et se retrouve perdu sur une île déserte. Pour survivre, il va devoir suivre les mêmes règles que dans son jeu vidéo favori : repérer les autres personnes perdues sur l\'île comme lui grâce à un cristal placé sur sa main et les tuer à l\'aide des mêmes types de bombes que dans le jeu. Il se retrouve désormais plongé dans un survival-game avec son équipe et les risques que ça comporte.',
            'note' => '7',
            'season' => '1',
            'episode' => '12',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'Neon Genesis Evangelion' ,
            'status' => 'fini',
            'pictures' => 'neon_genesis_evangelion.jpg',
            'vod' =>'http://www.dybex.com/',
            'summary' => 'En l\'an 2000, une gigantesque explosion se produit en Antarctique, provoquant un cataclysme (raz-de-marée, fonte des calottes polaires) qui dévaste une grande partie de la planète. Les autorités déclarent que cette catastrophe est due à la chute d\'un astéroïde.Quinze ans plus tard, l\'Humanité a surmonté cet événement, appelé le Second Impact. Mais de mystérieuses créatures nommées Anges font leur apparition, et tentent de détruire Tokyo-3, la nouvelle capitale-forteresse du Japon construite après le Second Impact. Pour les combattre, l\'organisation secrète NERV a mis au point une arme ultime, l\'« Evangelion » ou « EVA », géant anthropoïde piloté comme une simple mécanique, mais en réalité créature bien mystérieuse. Shinji Ikari, quatorze ans, se rend à Tokyo-3 sur invitation de son père, qu\'il n\'a pas revu depuis 10 ans. Il est loin de se douter qu\'il sera impliqué dans un conflit qui pourrait bien signifier la fin de l\'humanité quoi qu\'il arrive…',
            'note' => '10',
            'season' => '1',
            'episode' => '26',
            'licenced' => '1',

        ]);
        DB::table('animes')->insert([
            'title' =>'Fullmetal alchemist' ,
            'status' => 'fini',
            'pictures' => 'fullmetal_alchemist.jpg',
            'vod' =>'https://www.adkami.com/anime/164/1/1/2/1/',
            'summary' => 'Les frères Elric (Edward et Alphonse) ont hérité leur talent d’alchimiste de leur père mystérieusement disparu.À la suite de la mort de leur mère, les deux jeunes tentent de la faire revivre grâce à l\'alchimie, en faisant une transmutation humaine malgré l\'interdit. L\'opération échoue et les deux frères en subissent le contrecoup... Ed perd sa jambe en échange de voir la vérité ; il sauve son frère privé de son corps en fixant son esprit dans le corps en métal d\'une armure médiévale avec un cercle de transmutation tracé avec son sang, mais doit pour cela sacrifier un bras. Par la suite, il utilisera des prothèses mécaniques en métal, les mécagreffes (1er doublage) ou automails (2nd doublage). Ed passe ensuite l\'examen et devient Alchimiste d\'État, afin de pouvoir voyager et trouver la pierre philosophale, pour que son frère et lui retrouvent leur corps.',
            'note' => '9',
            'season' => '1',
            'episode' => '51',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'Fullmetal alchemist brotherhood' ,
            'status' => 'fini',
            'pictures' => 'fullmetal_alchemist_brotherhood.jpg',
            'vod' =>'https://www.adkami.com/anime/33/1/1/2/1/',
            'summary' => 'Dans le pays d\'Amestris, pays où l\'alchimie est élevée au rang de science universelle, deux frères, Edward et Alphonse Elric, parcourent le pays à la recherche de la légendaire pierre philosophale. Leur père les ayant quittés et leur mère, Trisha Elric, meurt quelques années plus tard d\'une maladie, laissant ses deux jeunes enfants derrière elle. Quelque temps plus tard, les deux frères tentent de la faire revenir grâce à l\'alchimie, bravant la loi qui interdit formellement la transmutation humaine. Ils en payeront le prix fort. Edward, l\'aîné, perdra sa jambe gauche, son petit frère son corps tout entier. Ed sacrifiera son bras droit en scellant l\'âme de son petit frère Alphonse dans une armure. Edward décide de s\'engager dans l\'armée à l\'âge de 12 ans en tant qu\'alchimiste d\'État, réussit l\'examen haut la main et obtient son nom d\'alchimiste, le Fullmetal. Aidés du statut d\'alchimiste d\'État d\'Edward, les deux frères chercheront, au péril de leur vie, la pierre qui leur rendra ce qu\'ils ont perdu, mais le secret de la pierre philosophale est bien gardé…',
            'note' => '9',
            'season' => '1',
            'episode' => '64',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'Mirai nikki' ,
            'status' => 'fini',
            'pictures' => 'mirai_nikki.jpg',
            'vod' =>'http://animedigitalnetwork.fr/embedded/mirai_nikki/1177',
            'summary' => 'Yukiteru Amano est un jeune garçon solitaire qui se réfugie dans son imaginaire pour échapper au vide social qui constitue son quotidien. Il considère qu’il peut éviter toute contrariété en observant le monde d\'un point de vue extérieur, et consigne tous les événements se passant autour de lui sous la forme d\'un journal qu’il tient à l’aide de son téléphone portable. Un jour, une des entités imaginaires lui servant de camarades de jeu, Deus ex Machina, dieu du temps et de l\'espace, lui propose de participer à un jeu. Yukiteru s\'aperçoit alors que le téléphone sur lequel il indiquait ses observations se met à contenir des entrées sur le futur autour de lui. Au départ il utilise ce pouvoir à outrance et est heureux de le posséder jusqu\'à ce que son journal lui prédise sa propre mort et qu\'une fille de sa classe, Yuno Gasai, qui possède aussi un journal du futur le suive ; il ignore alors qu\'elle souhaite le sauver.',
            'note' => '9',
            'season' => '1',
            'episode' => '26',
            'licenced' => '1',

        ]);
        DB::table('animes')->insert([
            'title' =>'Psycho pass' ,
            'status' => 'fini',
            'pictures' => 'psycho_pass.jpg',
            'vod' =>'http://kawaii-doki-doki.ek.la/psycho-pass-01-vostfr-a126972032',
            'summary' => 'Au début du l\'ère 2112, il est possible de mesurer instantanément l\'état mental d\'une personne, sa personnalité et la probabilité qu\'elle commette des crimes grâce à un dispositif installé sur le corps de chaque citoyen appelé « Psycho-Pass ». Lorsque cette probabilité, mesurée par le niveau du « coefficient de criminalité », est trop élevée chez certaines personnes : ces individus sont poursuivis et appréhendés ou si nécessaire, abattus. Cette tâche est effectuée par des équipes spéciales de criminels potentiels appelés Exécuteurs, qui sont supervisés par des policiers appelés Inspecteurs. Les Inspecteurs s\'assurent que les Exécuteurs exercent leurs fonctions dans les limites qui leur sont imposées. Les Inspecteurs et Exécuteurs utilisent une arme spéciale polymorphe appelée « Dominateur », conçue pour tirer uniquement sur ceux ayant un coefficient de criminalité plus élevé que la normale. L\'histoire suit l\'unité Une de la Division des Enquêtes Criminelles du Bureau de la Sécurité Publique au Japon.',
            'note' => '9',
            'season' => '2',
            'episode' => '33',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'Steins gate' ,
            'status' => 'fini',
            'pictures' => 'steins_gate.jpg',
            'vod' =>'http://www.dybex.com/',
            'summary' => 'L\'histoire de Steins;Gate se déroule dans le quartier otaku d\'Akihabara, et porte sur un groupe d\'amis qui ont transformé leur micro-ondes par inadvertance en dispositif pouvant envoyer des messages texte vers le passé. Dans le but de comprendre ce phénomène ils effectuent différentes expérience concernant le voyage dans le temps. Ils sont vite traqués par le centre de recherche CERN (ou SERN), qui réalise ses propres recherches sur les voyages temporels. Rintaro va donc utiliser la capacité du four à micro-ondes et se rendre rapidement compte que chaque modification du passé à un impact irréversible sur le présent.',
            'note' => '9',
            'season' => '1',
            'episode' => '24',
            'licenced' => '1',

        ]);
        DB::table('animes')->insert([
            'title' =>'Akikan!' ,
            'status' => 'fini',
            'pictures' => 'akikan.jpg',
            'vod' =>'http://www.anime-ultime.net/info-0-1/20639/Akikan-01-vostfr',
            'summary' => 'Un jeune lycéen nommé Kakeru Daichi est un collectionneur de canettes de soda rares. Un jour en sortant de cours, il décide d’en acheter une au melon. Lorsqu’il se met à la boire, une jeune fille ravissante et vêtue de vert apparait devant lui. Il croit d’abord à un rêve, la situation est embarrassante vu qu’il sort de la douche et qu’il est nu… Mais non. Il est maintenant l’heureux maitre de cette canette magique.Cette Akikan (canette vide) peut prendre forme humaine et possède des pouvoirs magiques. Kakeru va l’appeler Melon. Cette dernière a besoin de dioxyde de carbone pour vivre et cela ne peut se transmettre que lors d’un baiser. Vivant seul, Kakeru va devoir héberger Melon. De plus, le gouvernement s’intéresse à Kakeru et Melon, et évidemment, elle n’est pas la seule Akikan…',
            'note' => '2',
            'season' => '1',
            'episode' => '12',
            'licenced' => '0',

        ]);
        DB::table('animes')->insert([
            'title' =>'One Piece' ,
            'status' => 'en cours',
            'pictures' => 'one_Piece.jpg',
            'vod' =>'http://www.onepiecevostfr.com/one-piece-1.php',
            'summary' => 'Gold Roger est le seigneur des pirates. À sa mort, une grande vague de piraterie s’abat sur le monde. Ces pirates partent à la recherche du One Piece, le fabuleux trésor amassé par Gold Roger durant tout sa vie. Notre histoire commence dans un petit village dans lequel une bande de pirates réside depuis un an. Monkey D. Luffy, notre héros, est un petit garçon qui rêve de devenir pirate et demande inlassablement à Shanks le Roux, le chef des pirates, de le prendre dans son équipage. Celui-ci refuse évidemment à chaque fois en le tournant en ridicule. Un jour, Luffy mange par erreur le trésor des pirates qui n’est autre que l’un des fruits du démon, qui ont la réputation de donner des pouvoirs spéciaux. C’est ainsi que Luffy devient un homme élastique. Toutefois, le mangeur d’un fruit du démon se retrouve dans l’incapacité de nager… Dix ans plus tard, nous retrouvons Luffy qui décide de prendre la mer à la recherche d’un équipage à lui et avec pour objectif de devenir le seigneur des pirates !',
            'note' => '7',
            'season' => '18',
            'episode' => '802',
            'licenced' => '0',

        ]);

}
}