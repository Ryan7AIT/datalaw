<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Audit;
use App\Models\Process;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ryan ait',
            'email' => 'ryan@r.r',
        ]);


        // $articles = Article::factory(3)->create([
        //     'category' => 'base legal'
        // ]);

        $article01 = Article::factory()->create([
            'category' => 'base legal',
            'title' => 'Quel est les fondoment legal de ce traitment?'
        ]);

        $article02 = Article::factory()->create([
            'category' => 'base legal',
            'title' => 'Les critieres requis pour obtenir un consentement valis sont remplis'
        ]);

        $article03 = Article::factory()->create([
            'category' => 'base legal',
            'title' => 'Communication des donnees a un tier',
            'description' => "Le traitement des données à caractère personnel
            ne peut être effectué qu'avec le consentement exprès de la
            personne concernée (Article 7).",
            'memo' => "Pour que le traitement des données soit conforme à l'article 7, il est important de s'assurer que le consentement de la personne concernée est obtenu de manière explicite lorsque requis, que les exceptions prévues sont applicables dans les cas appropriés et que les droits de la personne concernée sont respectés tout au long du processus de traitement."
        ]);

        $article05 = Article::factory()->create([
            'category' => 'droit des personnes',
            'title' => 'Les données à caractère personnel
            qui concerne un enfant',
            'description' => "Le traitement des données à caractère personnel
            qui concerne un enfant ne peut s'effectuer qu'après
            l'obtention du consentement de son représentant légal ou, le
            cas échéant, de l'autorisation du juge compétent (Article 8).",
            'memo' => "Cet article établit les conditions pour le traitement des données à caractère personnel concernant un enfant. Le traitement ne peut avoir lieu qu'après avoir obtenu le consentement de son représentant légal ou, le cas échéant, l'autorisation du juge compétent. Le juge peut également permettre le traitement sans le consentement du représentant légal si l'intérêt supérieur de l'enfant le justifie. De plus, le juge a le pouvoir de révoquer cette autorisation à tout moment."
        ]);


        $article06 = Article::factory()->create([
            'category' => 'principe',
            'title' => 'Liciete et loyaute des traitments ',
            'description' => "Les données personnelles doivent etre  traitées de manière licite et loyale(Article 9).",
            'memo' => "Cet article énonce les principes clés pour le traitement des données personnelles. Les données personnelles doivent être traitées de manière licite et loyale. Elles doivent être collectées pour des finalités spécifiques, explicites et légitimes, et ne peuvent être utilisées ultérieurement de manière incompatible avec ces finalités. Les données doivent être adéquates, pertinentes et non excessives par rapport aux finalités du traitement. Elles doivent également être précises, complètes et mises à jour si nécessaire. La durée de conservation ne doit pas excéder celle nécessaire à la réalisation des finalités initiales. L'autorité nationale peut, sous certaines conditions, autoriser la conservation de données personnelles à des fins historiques, statistiques ou scientifiques au-delà de cette période."
        ]);

        $article07 = Article::factory()->create([
            'category' => 'donnees interdit',
            'title' => ' le traitement des données
            sensibles interdit',
            'description' => "Est interdit le traitement des données
            sensibles. (Article 18).",
            'memo' => "Cet article traite du traitement des données sensibles. Dans un premier temps, il interdit le traitement des données sensibles, sauf dans les cas où des motifs d'intérêt public indispensable sont présents pour garantir l'exercice des fonctions légales ou statutaires du responsable du traitement, si la personne concernée donne son consentement exprès, en vertu d'une disposition légale, ou avec l'autorisation de l'autorité nationale."
        ]);


        $article08 = Article::factory()->create([
            'category' => 'principe',
            'title' => ' Il est institué un registre national de protection
            des données à caractère personnel',
            'description' => "Il est institué un registre national de protection
            des données à caractère personnel, dont la tenue est dévolue
            à l'autorité nationale, sur lequel sont inscrits (Article 28).",
            'memo' => "Cet article établit la création d'un registre national de protection des données à caractère personnel, dont la responsabilité est confiée à l'autorité nationale. Ce registre contient des informations importantes, notamment les fichiers dont les autorités publiques sont responsables du traitement, les fichiers traités par des entités privées, les références aux lois et règlements établissant des fichiers publics, les déclarations à l'autorité nationale ainsi que les autorisations délivrées. Il contient également les données nécessaires pour permettre aux personnes concernées d'exercer les droits prévus par la loi. Les fichiers qui ont pour unique objectif la tenue d'un registre consultable par le public sont dispensés de l'inscription, mais l'identité de la personne responsable du traitement doit être enregistrée dans le registre national."
        ]);

        $article09 = Article::factory()->create([
            'category' => 'droit des personnes',
            'title' => "Droit a l'information",
            'description' => " Sauf si elle en a déjà eu connaissance, toute
            personne sollicitée, en vue d'une collecte de ses données à
            caractère personnel, doit être, préalablement, informée de
            manière expresse et non équivoque par le responsable du
            traitement ou son représentant, des éléments suivants :
            — l'identité du responsable du traitement et, le cas
            échéant, de son représentant ;
            — les finalités du traitement ;
            — toutes informations supplémentaires utiles notamment
            le destinataire, l'obligation de répondre et ses
            conséquences ainsi que ses droits et le transfert des données
            à l'étranger.
            Lorsque les données à caractère personnel n'ont pas été
            collectées auprès de la personne concernée, le responsable
            du traitement ou son représentant doit, avant l'enregistrement
            des données ou leur communication à un tiers, fournir à la
            personne concernée les informations visées ci-dessus, sauf
            si la personne en a déjà eu connaissance.
            En cas de collecte de données, en réseaux ouverts, la
            personne concernée doit être informée, sauf si elle sait
            déjà que les données à caractère personnel la concernant
            peuvent circuler sur les réseaux sans garanties de sécurité et
            qu'elles risquent d'être lues et utilisées, par des tiers non
            autorisés(Article 32).",
            'memo' => "Cet article énonce les exigences relatives à l'information préalable des personnes dont les données à caractère personnel sont collectées. Avant la collecte, la personne concernée doit être informée de manière explicite et non équivoque par le responsable du traitement ou son représentant des éléments suivants :

                L'identité du responsable du traitement et, le cas échéant, de son représentant.
                Les finalités du traitement.
                Toutes informations supplémentaires pertinentes, y compris les destinataires des données, l'obligation de répondre, les conséquences éventuelles, les droits de la personne concernée et le transfert de données à l'étranger."
        ]);


        $article10 = Article::factory()->create([
            'category' => 'droit des personnes',
            'title' => ' droit de la personne concernée',
            'description' => "La personne concernée a le droit d'obtenir du
            responsable du traitement :
            — la confirmation que les données personnelles la
            concernant sont ou ne sont pas traitées, les finalités du
            traitement, les catégories de données sur lesquelles il porte
            et les destinataires ;
            — la communication, sous une forme intelligible, de
            ses données qui font l'objet de traitement, ainsi que de
            toute information disponible sur l'origine des données.
            Le responsable du traitement peut demander à l'autorité
            nationale des délais de réponse aux demandes d'accès
            légitimes et peut s'opposer aux demandes manifestement
            abusives, notamment, par leur nombre et leur caractère
            répétitif. La charge de la preuve du caractère manifestement
            abusif de la demande, incombe au responsable du
            traitement(Article 34).",
            'memo' => "Cet article énonce les droits de la personne concernée en matière d'accès à ses données personnelles. La personne concernée a le droit d'obtenir du responsable du traitement les informations suivantes :

                Confirmation que ses données personnelles sont traitées ou non, ainsi que les finalités du traitement, les catégories de données traitées et les destinataires.
                Communication de ses données personnelles en forme intelligible, ainsi que toute information disponible sur l'origine de ces données.
                Le responsable du traitement a la possibilité de demander à l'autorité nationale des délais de réponse pour répondre aux demandes d'accès légitimes. De plus, il peut s'opposer aux demandes manifestement abusives, notamment celles qui sont excessives en nombre ou répétitives. La charge de la preuve du caractère manifestement abusif de la demande incombe au responsable du traitement."
        ]);


        $article11 = Article::factory()->create([
            'category' => 'confidentialite',
            'title' => 'Transfert de données vers un pays étranger',
            'description' => "Le responsable d'un traitement ne peut
            transférer, les données à caractère personnel vers un Etat
            étranger, que sur autorisation de l'autorité nationale,
            conformément aux dispositions de la présente loi et que si
            cet Etat assure un niveau de protection suffisant de la vie
            privée et des libertés et droits fondamentaux des personnes
            à l'égard du traitement dont ces données font l'objet ou
            peuvent faire l'objet. (Article 44).",
            'memo' => "Cet article établit les conditions pour le transfert de données à caractère personnel vers un État étranger. Un responsable de traitement ne peut transférer des données à caractère personnel vers un pays étranger que s'il obtient l'autorisation de l'autorité nationale et si cet État étranger garantit un niveau de protection suffisant de la vie privée et des droits fondamentaux des personnes concernant le traitement de ces données. Le niveau de protection suffisant est évalué par l'autorité nationale en tenant compte des dispositions juridiques, des mesures de sécurité, des caractéristiques du traitement et de la nature des données.

            Le transfert de données à caractère personnel vers un pays étranger est interdit si cela pourrait compromettre la sécurité publique ou les intérêts vitaux de l'État."
        ]);



        $article04 = Article::factory()->create([
            'category' => 'principe',
            'title' => 'Quand le traitment concerne les donnees personnelles dun enfant'
        ]);

        Rule::factory()->create([
            'article_id' => 3,
            'title' => "Consentement explicite : Le traitement des données à caractère personnel ne peut être effectué qu'avec le consentement exprès de la personne concernée."
        ]);

        Rule::factory()->create([
            'article_id' => 3,
            'title' => "Incapacité ou interdiction : Si la personne concernée est incapable ou interdite, le consentement est régi par les règles du droit commun."
        ]);
        Rule::factory()->create([
            'article_id' => 3,
            'title' => "Rétractation du consentement : La personne concernée a le droit de se rétracter à tout moment après avoir donné son consentement."
        ]);
        Rule::factory()->create([
            'article_id' => 3,
            'title' => "Communication à un tiers : Les données à caractère personnel ne peuvent être communiquées à un tiers que si cela est directement lié aux fonctions du responsable du traitement et du destinataire, et sous réserve du consentement préalable de la personne concernée."
        ]);


        Rule::factory()->create([
            'article_id' => $article05->id,
            'title' => "S'assurer que le traitement des données d'un enfant ne commence qu'après avoir obtenu le consentement du représentant légal ou l'autorisation du juge compétent."
        ]);

        Rule::factory()->create([
            'article_id' => $article05->id,
            'title' => "Si l'autorisation du juge est obtenue, veiller à ce que les raisons justifiant l'intérêt supérieur de l'enfant soient clairement établies et documentées"
        ]);

        Rule::factory()->create([
            'article_id' => $article06->id,
            'title' => "S'assurer que les données personnelles sont collectées et traitées conformément aux principes énoncés dans cet article."
        ]);

        Rule::factory()->create([
            'article_id' => $article06->id,
            'title' => "Obtenir le consentement explicite lorsque nécessaire pour le traitement des données personnelles."
        ]);

        Rule::factory()->create([
            'article_id' => $article06->id,
            'title' => "Établir des politiques de conservation des données qui respectent la durée nécessaire pour atteindre les finalités du traitement initial."
        ]);

        Rule::factory()->create([
            'article_id' => $article06->id,
            'title' => "Garantir que les données personnelles sont traitées de manière licite et loyale, en fournissant aux personnes concernées des informations transparentes sur les finalités et les méthodes de traitement."
        ]);

        Rule::factory()->create([
            'article_id' => $article06->id,
            'title' => "Veiller à ce que les données collectées soient adéquates, pertinentes et non excessives pour atteindre les finalités du traitement."
        ]);

        Rule::factory()->create([
            'article_id' => $article07->id,
            'title' => "Assurer que le traitement des données sensibles est interdit, à moins que l'une des exceptions énumérées dans l'article ne s'applique."
        ]);


        Rule::factory()->create([
            'article_id' => $article07->id,
            'title' => "S'assurer que le traitement des données sensibles est justifié par l'une des raisons spécifiques mentionnées dans l'article."
        ]);

        Rule::factory()->create([
            'article_id' => $article07->id,
            'title' => "Obtenir le consentement exprès de la personne concernée lorsque requis par la loi."
        ]);

        Rule::factory()->create([
            'article_id' => $article07->id,
            'title' => "Si le traitement est autorisé par l'autorité nationale, veiller à ce que toutes les conditions soient respectées."
        ]);

        Rule::factory()->create([
            'article_id' => $article08->id,
            'title' => "S'assurer que les fichiers et les traitements de données à caractère personnel sont inscrits au registre national conformément aux dispositions énoncées dans l'article."
        ]);

        Rule::factory()->create([
            'article_id' => $article08->id,
            'title' => "Mettre en place des procédures pour déclarer les fichiers et obtenir les autorisations nécessaires auprès de l'autorité nationale."
        ]);

        Rule::factory()->create([
            'article_id' => $article08->id,
            'title' => "Veiller à ce que les données requises pour permettre aux personnes concernées d'exercer leurs droits soient enregistrées dans le registre."
        ]);

        Rule::factory()->create([
            'article_id' => $article08->id,
            'title' => "Respecter les exigences d'inscription au registre national, en fournissant toutes les informations nécessaires concernant les fichiers et les traitements de données."
        ]);

        Rule::factory()->create([
            'article_id' => $article08->id,
            'title' => "Assurer que l'identité de la personne responsable du traitement est enregistrée dans le registre, même pour les fichiers consultables par le public."
        ]);

        Rule::factory()->create([
            'article_id' => $article08->id,
            'title' => "Collaborer avec l'autorité nationale pour se conformer aux conditions et modalités réglementaires de tenue du registre national."
        ]);

        Rule::factory()->create([
            'article_id' => $article09->id,
            'title' => "S'assurer que toutes les informations nécessaires sont fournies de manière claire et explicite avant la collecte des données."
        ]);

        Rule::factory()->create([
            'article_id' => $article09->id,
            'title' => "Si les données ont été collectées auprès de tiers, veiller à fournir les informations requises avant l'enregistrement ou la communication des données."
        ]);

        Rule::factory()->create([
            'article_id' => $article09->id,
            'title' => "Respecter les droits des personnes concernées en fournissant des informations transparentes sur les finalités du traitement, les destinataires des données, les droits de la personne concernée, etc."
        ]);

        Rule::factory()->create([
            'article_id' => $article09->id,
            'title' => "S'assurer que la personne concernée est informée même en cas de collecte de données sur des réseaux ouverts, sauf si elle est déjà consciente des risques."
        ]);


        Rule::factory()->create([
            'article_id' => $article09->id,
            'title' => "Veiller à ce que les informations fournies à la personne concernée soient confidentielles et ne soient pas partagées avec des tiers non autorisés."
        ]);

        Rule::factory()->create([
            'article_id' => $article09->id,
            'title' => "Garantir que les données collectées sur des réseaux ouverts sont sécurisées et protégées conformément aux normes de sécurité appropriées."
        ]);

        Rule::factory()->create([
            'article_id' => $article10->id,
            'title' => "Respecter le droit de la personne concernée d'obtenir des informations sur le traitement de ses données, y compris les finalités, les catégories de données et les destinataires."
        ]);

        Rule::factory()->create([
            'article_id' => $article10->id,
            'title' => "Fournir à la personne concernée ses données personnelles dans un format compréhensible et avec des informations sur leur origine."
        ]);

        Rule::factory()->create([
            'article_id' => $article10->id,
            'title' => "Assurer que les données personnelles communiquées à la personne concernée sont traitées de manière confidentielle et ne sont pas partagées avec des tiers non autorisés."
        ]);

        Rule::factory()->create([
            'article_id' => $article10->id,
            'title' => "Respecter les délais de réponse aux demandes d'accès légitimes et justifier tout retard auprès de l'autorité nationale si nécessaire."
        ]);


        Rule::factory()->create([
            'article_id' => $article11->id,
            'title' => "Vérifier si l'État étranger garantit un niveau de protection suffisant de la vie privée et des droits fondamentaux des personnes."
        ]);


        Rule::factory()->create([
            'article_id' => $article11->id,
            'title' => "Évaluer les dispositions juridiques et les mesures de sécurité en vigueur dans l'État étranger pour s'assurer de la confidentialité et de la sécurité des données transférées."
        ]);


        Rule::factory()->create([
            'article_id' => $article11->id,
            'title' => "Obtenir l'autorisation de l'autorité nationale avant de transférer des données à caractère personnel vers un pays étranger."
        ]);


        Rule::factory()->create([
            'article_id' => $article11->id,
            'title' => "Évaluer si le transfert de données pourrait compromettre la sécurité publique ou les intérêts vitaux de l'État et éviter de telles situations."
        ]);







        // $audit = Audit::factory()->create();



        // $article03->audits()->attach($audit->id, ['status' => 0]);
        // $article01->audits()->attach($audit->id, ['status' => 0]);
        // $article02->audits()->attach($audit->id, ['status' => 0]);
        // $article04->audits()->attach($audit->id, ['status' => 0]);
        // $article05->audits()->attach($audit->id, ['status' => 0]);
        // $article06->audits()->attach($audit->id, ['status' => 0]);
        // $article07->audits()->attach($audit->id, ['status' => 0]);
        // $article08->audits()->attach($audit->id, ['status' => 0]);
        // $article09->audits()->attach($audit->id, ['status' => 0]);
        // $article10->audits()->attach($audit->id, ['status' => 0]);
        // $article11->audits()->attach($audit->id, ['status' => 0]);








    }
}
