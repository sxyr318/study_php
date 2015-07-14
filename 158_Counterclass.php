<?PHP
// Counterクラスを定義する
class  Counter
{
	// 静的プロパティ $countを宣言する
	public static $count = 0;

	// 静的メソッドincrement()を宣言する
	public static function increment()
	{
		static::$count++;
	}

	// 静的メソッドcurrent()を宣言する
	public static function current()
	{
		return static::$count;
	}
}

/* ?>終了タグ省略*/

