<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Domain\ValueObject\Email;

class EmailTest extends TestCase
{
    /** @test */
    public function メールアドレスの文字列を渡したとき_渡した文字列が返ってくること()
    {
        $expected = 'test@example.com';
        $email = new Email($expected);
        
        $this->assertSame($expected, $email->value());
    }

    /** 
     * @test
     */
    public function メールアドレスを空で渡したとき_Exceptionが発生すること()
    {
        $this->expectException(Exception::class);
        new Email('');
    }
}
