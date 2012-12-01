<?php

namespace Faker\Provider\ua_UA;

class Address extends \Faker\Provider\Base
{
	protected static $cityPrefix = array('місто');
	protected static $regionSuffix = array('область');
	protected static $streetPrefix = array(
		'вул.', 'пров.', 'пл.', 'просп.'
	);
	protected static $buildingNumber = array('##');
	protected static $postcode = array('#####');
	protected static $country = array(
        'Афганістан',
        'Албанія',
        'Алжир',
        'Андорра',
        'Ангола',
        'Аргентина',
        'Вірменія',
        'Австралія',
        'Австрія',
        'Азербайджан',
        'Багамські острови',
        'Бахрейн',
        'Бангладеш',
        'Барбадос',
        'Білорусь',
        'Бельгія',
        'Беліз',
        'Бенін',
        'Бутан',
        'Болівія',
        'Боснія і Герцеговина',
        'Ботсвана',
        'Бразилія',
        'Бруней',
        'Болгарія',
        'Бурунді',
        'Камбоджа',
        'Камерун',
        'Канада',
        'Кабо-Верде',
        'Центрально-Африканська Республіка',
        'Чад',
        'Чилі',
        'Китай',
        'Колумбія',
        'Коморські острови',
        'Конго',
        'Конго, Демократична Республіка',
        'Коста-Ріка',
        'Хорватія',
        'Куба',
        'Кіпр',
        'Чеська республіка',
        'Данія',
        'Джибуті',
        'Домініка',
        'Домініканська Республіка',
        'східний Тимор',
        'Еквадор',
        'Єгипет',
        'Сальвадор',
        'Екваторіальна Гвінея',
        'Еритрея',
        'Естонія',
        'Ефіопія',
        'Фіджі',
        'Фінляндія',
        'Франція',
        'Габон',
        'Гамбія',
        'Грузія',
        'Німеччина',
        'Гана',
        'Греція',
        'Гренада',
        'Гватемала',
        'Гвінея',
        'Гвінея-Бісау',
        'Гайана',
        'Гаїті',
        'Гондурас',
        'Угорщина',
        'Ісландія',
        'Індія',
        'Індонезія',
        'Іран',
        'Ірак',
        'Ірландія',
        'Ізраїль',
        'Італія',
        'Ямайка',
        'Японія',
        'Йорданія',
        'Казахстан',
        'Кенія',
        'Кірібаті',
        'Північна Корея',
        'Південна Корея',
        'Косово',
        'Кувейт',
        'Киргизія',
        'Лаос',
        'Латвія',
        'Ліван',
        'Лесото',
        'Ліберія',
        'Лівія',
        'Ліхтенштейн',
        'Литва',
        'Люксембург',
        'Македонії',
        'Мадагаскар',
        'Малаві',
        'Малайзія',
        'Мальдіви',
        'Малі',
        'Мальта',
        'Маршаллові острови',
        'Мавританія',
        'Маврикій',
        'Мексика',
        'Мікронезія',
        'Молдова',
        'Монако',
        'Монголія',
        'Чорногорія',
        'Марокко',
        'Мозамбік',
        'М\'янма',
        'Намібія',
        'Науру',
        'Непал',
        'Нідерланди',
        'Нова Зеландія',
        'Нікарагуа',
        'Нігер',
        'Нігерія',
        'Норвегія',
        'Оман',
        'Пакистан',
        'Палау',
        'Панама',
        'Папуа-Нова Гвінея',
        'Парагвай',
        'Перу',
        'Філіппіни',
        'Польща',
        'Португалія',
        'Катар',
        'Румунія',
        'Російська Федерація',
        'Руанда',
        'Сент-Кітс і Невіс',
        'Сент-Люсія',
        'Сент-Вінсент і Гренадіни',
        'Самоа',
        'Саудівська Аравія',
        'Сенегал',
        'Сербія',
        'Сейшельські острови',
        'Сьєрра-Леоне',
        'Сінгапур',
        'Словаччина',
        'Словенія',
        'Соломонові острови',
        'Сомалі',
        'ПАР',
        'Іспанія',
        'Шрі Ланка',
        'Судан',
        'Сурінам',
        'Свазіленд',
        'Швеція',
        'Швейцарія',
        'Сирія',
        'Тайвань',
        'Таджикистан',
        'Танзанія',
        'Таїланд',
        'Того',
        'Тонга',
        'Тринідад і Тобаго',
        'Туніс',
        'Туреччина',
        'Туркменістан',
        'Тувалу',
        'Уганда',
        'Україна',
        'Об\'єднані Арабські Емірати',
        'Великобританія',
        'Сполучені Штати',
        'Уругвай',
        'Узбекистан',
        'Вануату',
        'Ватикан',
        'Венесуела',
        'В\'єтнам',
        'Ємен',
        'Замбія',
        'Зімбабве',
    );

	protected static $region = array(
        'Вінницька',
        'Волинська',
        'Дніпропетровська',
        'Донецька',
        'Житомирська',
        'Закарпатська',
        'Запорізька',
        'Івано-Франківська',
        'Київська',
        'Кіровоградська',
        'Луганська',
        'Львівська',
        'Миколаївська',
        'Одеська',
        'Полтавська',
        'Рівненська',
        'Сумська',
        'Тернопільська',
        'Харківська',
        'Херсонська',
        'Хмельницька',
        'Черкаська',
        'Чернівецька',
        'Чернігівська'
	);

	protected static $city = array(
        'Вінниця',
        'Луцьк',
        'Дніпропетровськ',
        'Донецьк',
        'Житомир',
        'Ужгород',
        'Запоріжжя',
        'Івано-Франківськ',
        'Київ',
        'Кіровоград',
        'Луганськ',
        'Львів',
        'Миколаїв',
        'Одеса',
        'Полтава',
        'Рівне',
        'Суми',
        'Тернопіль',
        'Харків',
        'Херсон',
        'Хмельницьк',
        'Черкаси',
        'Чернівці',
        'Чернігів'
	);

	protected static $street = array(
		'Тараса Шевченка',
		'Лесі Українки',
		'Леніна',
		'40 років Перемоги',
		'50 років Жовтня',
		'Михайла Грушевського',
		'Гагаріна',
		'Космонавта Попова',
		'Генерала Жадова',
		'Пацаєва',
		'Волкова',
	);

	protected static $addressFormats = array(
		"{{postcode}}, {{cityAndRegion}}, {{streetPrefix}} {{street}}, {{buildingNumber}}",
	);

	public static function buildingNumber()
	{
		return static::numerify(static::randomElement(static::$buildingNumber));
	}

	public function address()
	{
        $format = static::randomElement(static::$addressFormats);
		return $this->generator->parse($format, array());
	}

	public static function country()
	{
		return static::randomElement(static::$country);
	}

	public static function postcode()
	{
		return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
	}

	public static function regionSuffix()
	{
		return static::randomElement(static::$regionSuffix);
	}

	public static function region()
	{
		return static::randomElement(static::$region);
	}

	public static function cityPrefix()
	{
		return static::randomElement(static::$cityPrefix);
	}

	public static function city()
	{
		return static::randomElement(static::$city);
	}

    /**
     * Get city and region together
     * We need it because city and region must comply each other in Ukraine
     * @example 'Закарпатська область, місто Ужгород'
     * @return string
     */
    public function cityAndRegion()
    {
        $regionAndCityNumber = rand(0, count(static::$region) - 1);
        $region = static::$region[$regionAndCityNumber];
        $city = static::$city[$regionAndCityNumber];
        $format = "$region {{regionSuffix}}, {{cityPrefix}} $city";
        return $this->generator->parse($format);
    }

	public static function streetPrefix()
	{
		return static::randomElement(static::$streetPrefix);
	}

	public static function street()
	{
		return static::randomElement(static::$street);
	}
}
