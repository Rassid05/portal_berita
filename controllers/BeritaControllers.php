<?php
if (!class_exists('BeritaControllers')) {
    class BeritaControllers {
        private $connect;

        public function __construct($dbConnection) {
            $this->connect = $dbConnection;
        }

        public function getBerita() {
            $stmt = $this->connect->prepare("SELECT judul, description, slug FROM berita");
            $stmt->execute();
            $result = $stmt->get_result();
            
            $berita = [];
            while ($row = $result->fetch_assoc()) {
                $berita[] = $row;
            }

            $stmt->close();
            return $berita;
        }

        public function getBeritaBySlug($slug) {
            $stmt = $this->connect->prepare("SELECT * FROM berita WHERE slug = ?");
            $stmt->bind_param("s", $slug);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_assoc();

            $stmt->close();
            return $data;
        }

    }
}

?>