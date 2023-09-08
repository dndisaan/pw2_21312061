use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpmUts2Table extends Migration
{
    public function up()
    {
        Schema::create('npm_uts2', function (Blueprint $table) {
            $table->id();
            $table->integer('ut2_f1');
            $table->integer('ut2_f2');
            $table->integer('ut2_f3');
            $table->integer('ut2_f4');
            $table->unsignedBigInteger('id_uts1');
            $table->unsignedBigInteger('id_uts3');
            $table->foreign('id_uts1')->references('id')->on('npm_uts1');
            $table->foreign('id_uts3')->references('id')->on('npm_uts3');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('npm_uts2');
    }
}
