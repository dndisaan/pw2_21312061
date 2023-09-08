use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpmUts1Table extends Migration
{
    public function up()
    {
        Schema::create('npm_uts1', function (Blueprint $table) {
            $table->id();
            $table->integer('uts_f1');
            $table->integer('uts_f2');
            $table->integer('uts_f3');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('npm_uts1');
    }
}
