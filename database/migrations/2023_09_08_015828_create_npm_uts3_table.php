use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpmUts3Table extends Migration
{
    public function up()
    {
        Schema::create('npm_uts3', function (Blueprint $table) {
            $table->id();
            $table->integer('uts3_f1');
            $table->integer('uts3_f2');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('npm_uts3');
    }
}
