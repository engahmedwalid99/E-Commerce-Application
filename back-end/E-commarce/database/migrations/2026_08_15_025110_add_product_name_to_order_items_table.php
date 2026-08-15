use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('order_items', 'product_name')) {
            Schema::table('order_items', function (Blueprint $table) {
                $table->string('product_name');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('order_items', 'product_name')) {
            Schema::table('order_items', function (Blueprint $table) {
                $table->dropColumn('product_name');
            });
        }
    }
};
