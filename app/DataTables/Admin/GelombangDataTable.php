<?php

namespace App\DataTables\Admin;

use App\Models\Gelombang;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class GelombangDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
        ->eloquent($query)
        ->setRowId(function ($row) {
            return $row->id;
        })
        ->editColumn('tgl_mulai', function($row){
            return $row->tgl_mulai->format('d F Y');
        })
        ->editColumn('tgl_selesai', function($row){
            return $row->tgl_selesai->format('d F Y');
        })
        ->editColumn('test_mulai', function($row){
            return $row->test_mulai->format('d F Y');
        })
        ->editColumn('test_selesai', function($row){
            return $row->test_selesai->format('d F Y');
        })
        ->editColumn('wawancara_mulai', function($row){
            return $row->wawancara_mulai->format('d F Y');
        })
        ->editColumn('wawancara_selesai', function($row){
            return $row->wawancara_selesai->format('d F Y');
        })
        ->editColumn('her_mulai', function($row){
            return $row->her_mulai->format('d F Y');
        })
        ->editColumn('her_selesai', function($row){
            return $row->her_selesai->format('d F Y');
        })
        ->editColumn('almamater_mulai', function($row){
            return $row->almamater_mulai->format('d F Y');
        })
        ->editColumn('almamater_selesai', function($row){
            return $row->almamater_selesai->format('d F Y');
        })
        ->editColumn('pembekalan', function($row){
            return $row->pembekalan->format('d F Y');
        })
        ->addColumn('action', function ($row) {
            $btn = '<div class="btn-group">';
            $btn = $btn . '<a href="' . route('admin.gelombang.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
            $btn = $btn . '<a href="' . route('admin.gelombang.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
            $btn = $btn . '</div>';

            return $btn;
        })
        ->editColumn('created_at', function ($row) {
            return $row->created_at;
        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Admin\Gelombang $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Gelombang $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('gelombang-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('<"dataTables_wrapper dt-bootstrap"B<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex"l>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>')
                    ->orderBy(1)
                    ->parameters([
                        'autoWidth' => false, 
                        'scrollX' => true
                    ])
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('gelombang'),
            Column::make('tahun_id')->title('Tahun'),
            Column::make('kode_gelombang'),
            Column::make('tgl_mulai')->title('Tanggal Mulai'),
            Column::make('tgl_selesai')->title('Tanggal Selesai'),
            Column::make('test_mulai'),
            Column::make('test_selesai'),
            Column::make('wawancara_mulai'),
            Column::make('wawancara_selesai'),
            Column::make('her_mulai')->title('Heregistrasi Mulai'),
            Column::make('her_selesai')->title('Heregistrasi Selesai'),
            Column::make('almamater_mulai'),
            Column::make('almamater_selesai'),
            Column::make('pembekalan')
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Gelombang_' . date('YmdHis');
    }
}
