<?php

namespace App\DataTables\Admin;

use App\Models\Pendaftar;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PendaftarDataTable extends DataTable
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
        ->editColumn('tgl_daftar', function($row){
            return $row->tgl_daftar->format('d F Y');
        })
        ->editColumn('tgl_lhr', function($row){
            return $row->tgl_lhr->format('d F Y');
        })
        ->addColumn('action', function ($row) {
            $btn = '<div class="btn-group">';
            $btn = $btn . '<a href="' . route('admin.pendaftar.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
            $btn = $btn . '<a href="' . route('admin.pendaftar.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
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
     * @param \App\App\Models\Admin/Pendaftar $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pendaftar $model)
    {
        return $model->with(['jurusan1','jurusan2','gelombang', 'status'])->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('pendaftar-table')
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
            Column::make('tgl_daftar')->title('Tanggal Daftar'),
            Column::make('tahun_id')->title('Tahun'),
            Column::make('gelombang_id')->title('Nama Gelombang')->data('gelombang.gelombang'),
            Column::make('no_pendaftaran'),
            Column::make('nama'),
            Column::make('jurusan1')->title('Pilihan 1')->data('jurusan1.prodi'),
            Column::make('jurusan2')->title('Pilihan 2')->data('jurusan2.prodi'),
            Column::make('jurusan_diterima')->title('Diterima'),
            Column::make('status')->data('status.status')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Pendaftar_' . date('YmdHis');
    }
}
