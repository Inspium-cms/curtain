@extends('admin.layouts.app')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-md-12 col-xxl-4 mb-6">
      <div class="card h-100">
        <div class="d-flex align-items-end row">
          <div class="col-7">
            <div class="card-body">
              <h5 class="card-title mb-1 text-nowrap">
                Congratulations  {{ Auth::user()->name }}
                <small class="text-muted">({{ Auth::user()->getRoleNames()[0] }})</small>  ! 🎉
              </h5>
              <p class="card-subtitle text-nowrap mb-3">
                Best seller of the month
              </p>

              <h5 class="card-title text-primary mb-0">₹48.9k</h5>
              <p class="mb-3">78% of target 🚀</p>

              <a
                href="javascript:;"
                class="btn btn-sm btn-primary mb-1"
                >View sales</a
              >
            </div>
          </div>
          <div class="col-5">
            <div class="card-body pb-0 text-end">
              <img
                src="./assets/prize-light.png"
                width="91"
                height="144"
                class="rounded-start"
                alt="View Sales"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- New Orders & Activity -->
    <div class="col-xxl-8 mb-6">
      <div class="card h-100">
        <div class="card-body row g-4 p-0">
          <div class="col-md-6 card-separator">
            <div class="p-6">
              <div
                class="card-title d-flex align-items-start justify-content-between"
              >
                <h5 class="mb-0">New Orders</h5>
                <small>Last Week</small>
              </div>
              <div
                class="d-flex justify-content-between"
                style="position: relative"
              >
                <div class="mt-auto">
                  <h3 class="mb-1">23%</h3>
                  <small class="text-danger text-nowrap fw-medium"
                    ><i class="bx bx-down-arrow-alt"></i>
                    -13.24%</small
                  >
                </div>
                <div id="visitorsChart" style="min-height: 120px">
                  <div
                    id="apexcharts8b5lv0uw"
                    class="apexcharts-canvas apexcharts8b5lv0uw apexcharts-theme-light"
                    style="width: 200px; height: 120px"
                  >
                    <svg
                      id="SvgjsSvg1619"
                      width="200"
                      height="120"
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      xmlns:svgjs="http://svgjs.dev"
                      class="apexcharts-svg"
                      xmlns:data="ApexChartsNS"
                      transform="translate(0, 0)"
                      style="background: transparent"
                    >
                      <g
                        id="SvgjsG1621"
                        class="apexcharts-inner apexcharts-graphical"
                        transform="translate(22, 5)"
                      >
                        <defs id="SvgjsDefs1620">
                          <lineargradient
                            id="SvgjsLinearGradient1624"
                            x1="0"
                            y1="0"
                            x2="0"
                            y2="1"
                          >
                            <stop
                              id="SvgjsStop1625"
                              stop-opacity="0.4"
                              stop-color="rgba(216,227,240,0.4)"
                              offset="0"
                            ></stop>
                            <stop
                              id="SvgjsStop1626"
                              stop-opacity="0.5"
                              stop-color="rgba(190,209,230,0.5)"
                              offset="1"
                            ></stop>
                            <stop
                              id="SvgjsStop1627"
                              stop-opacity="0.5"
                              stop-color="rgba(190,209,230,0.5)"
                              offset="1"
                            ></stop>
                          </lineargradient>
                          <clippath id="gridRectMask8b5lv0uw">
                            <rect
                              id="SvgjsRect1629"
                              width="172"
                              height="87.72999999999999"
                              x="-2"
                              y="0"
                              rx="0"
                              ry="0"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                              fill="#fff"
                            ></rect>
                          </clippath>
                          <clippath
                            id="forecastMask8b5lv0uw"
                          ></clippath>
                          <clippath
                            id="nonForecastMask8b5lv0uw"
                          ></clippath>
                          <clippath id="gridRectMarkerMask8b5lv0uw">
                            <rect
                              id="SvgjsRect1630"
                              width="172"
                              height="91.72999999999999"
                              x="-2"
                              y="-2"
                              rx="0"
                              ry="0"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                              fill="#fff"
                            ></rect>
                          </clippath>
                        </defs>
                        <rect
                          id="SvgjsRect1628"
                          width="14.4"
                          height="87.72999999999999"
                          x="0"
                          y="0"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke-dasharray="3"
                          fill="url(#SvgjsLinearGradient1624)"
                          class="apexcharts-xcrosshairs"
                          y2="87.72999999999999"
                          filter="none"
                          fill-opacity="0.9"
                        ></rect>
                        <g
                          id="SvgjsG1649"
                          class="apexcharts-xaxis"
                          transform="translate(0, 0)"
                        >
                          <g
                            id="SvgjsG1650"
                            class="apexcharts-xaxis-texts-g"
                            transform="translate(0, -4)"
                          >
                            <text
                              id="SvgjsText1652"
                              font-family="Helvetica, Arial, sans-serif"
                              x="12"
                              y="116.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1653">M</tspan>
                              <title>M</title>
                            </text>
                            <text
                              id="SvgjsText1655"
                              font-family="Helvetica, Arial, sans-serif"
                              x="36"
                              y="116.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1656">T</tspan>
                              <title>T</title>
                            </text>
                            <text
                              id="SvgjsText1658"
                              font-family="Helvetica, Arial, sans-serif"
                              x="60"
                              y="116.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1659">W</tspan>
                              <title>W</title>
                            </text>
                            <text
                              id="SvgjsText1661"
                              font-family="Helvetica, Arial, sans-serif"
                              x="84"
                              y="116.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1662">T</tspan>
                              <title>T</title>
                            </text>
                            <text
                              id="SvgjsText1664"
                              font-family="Helvetica, Arial, sans-serif"
                              x="108"
                              y="116.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1665">F</tspan>
                              <title>F</title>
                            </text>
                            <text
                              id="SvgjsText1667"
                              font-family="Helvetica, Arial, sans-serif"
                              x="132"
                              y="116.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1668">S</tspan>
                              <title>S</title>
                            </text>
                            <text
                              id="SvgjsText1670"
                              font-family="Helvetica, Arial, sans-serif"
                              x="156"
                              y="116.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1671">S</tspan>
                              <title>S</title>
                            </text>
                          </g>
                        </g>
                        <g id="SvgjsG1674" class="apexcharts-grid">
                          <g
                            id="SvgjsG1675"
                            class="apexcharts-gridlines-horizontal"
                            style="display: none"
                          >
                            <line
                              id="SvgjsLine1677"
                              x1="0"
                              y1="0"
                              x2="168"
                              y2="0"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1678"
                              x1="0"
                              y1="17.546"
                              x2="168"
                              y2="17.546"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1679"
                              x1="0"
                              y1="35.092"
                              x2="168"
                              y2="35.092"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1680"
                              x1="0"
                              y1="52.638"
                              x2="168"
                              y2="52.638"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1681"
                              x1="0"
                              y1="70.184"
                              x2="168"
                              y2="70.184"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1682"
                              x1="0"
                              y1="87.72999999999999"
                              x2="168"
                              y2="87.72999999999999"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                          </g>
                          <g
                            id="SvgjsG1676"
                            class="apexcharts-gridlines-vertical"
                            style="display: none"
                          ></g>
                          <line
                            id="SvgjsLine1684"
                            x1="0"
                            y1="87.72999999999999"
                            x2="168"
                            y2="87.72999999999999"
                            stroke="transparent"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                          ></line>
                          <line
                            id="SvgjsLine1683"
                            x1="0"
                            y1="1"
                            x2="0"
                            y2="87.72999999999999"
                            stroke="transparent"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG1631"
                          class="apexcharts-bar-series apexcharts-plot-series"
                        >
                          <g
                            id="SvgjsG1632"
                            class="apexcharts-series"
                            rel="1"
                            seriesName="seriesx1"
                            data:realIndex="0"
                          >
                            <path
                              id="SvgjsPath1636"
                              d="M 4.8 78.72999999999999L 4.8 61.63799999999999Q 4.8 52.63799999999999 13.8 52.63799999999999L 10.2 52.63799999999999Q 19.2 52.63799999999999 19.2 61.63799999999999L 19.2 61.63799999999999L 19.2 78.72999999999999Q 19.2 87.72999999999999 10.2 87.72999999999999L 13.8 87.72999999999999Q 4.8 87.72999999999999 4.8 78.72999999999999z"
                              fill="#696cff29"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMask8b5lv0uw)"
                              pathTo="M 4.8 78.72999999999999L 4.8 61.63799999999999Q 4.8 52.63799999999999 13.8 52.63799999999999L 10.2 52.63799999999999Q 19.2 52.63799999999999 19.2 61.63799999999999L 19.2 61.63799999999999L 19.2 78.72999999999999Q 19.2 87.72999999999999 10.2 87.72999999999999L 13.8 87.72999999999999Q 4.8 87.72999999999999 4.8 78.72999999999999z"
                              pathFrom="M 4.8 78.72999999999999L 4.8 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 19.2 78.72999999999999L 4.8 78.72999999999999"
                              cy="52.63799999999999"
                              cx="28.8"
                              j="0"
                              val="40"
                              barHeight="35.092"
                              barWidth="14.4"
                            ></path>
                            <path
                              id="SvgjsPath1638"
                              d="M 28.8 78.72999999999999L 28.8 13.386499999999998Q 28.8 4.386499999999998 37.8 4.386499999999998L 34.2 4.386499999999998Q 43.2 4.386499999999998 43.2 13.386499999999998L 43.2 13.386499999999998L 43.2 78.72999999999999Q 43.2 87.72999999999999 34.2 87.72999999999999L 37.8 87.72999999999999Q 28.8 87.72999999999999 28.8 78.72999999999999z"
                              fill="#696cff29"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMask8b5lv0uw)"
                              pathTo="M 28.8 78.72999999999999L 28.8 13.386499999999998Q 28.8 4.386499999999998 37.8 4.386499999999998L 34.2 4.386499999999998Q 43.2 4.386499999999998 43.2 13.386499999999998L 43.2 13.386499999999998L 43.2 78.72999999999999Q 43.2 87.72999999999999 34.2 87.72999999999999L 37.8 87.72999999999999Q 28.8 87.72999999999999 28.8 78.72999999999999z"
                              pathFrom="M 28.8 78.72999999999999L 28.8 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 43.2 78.72999999999999L 28.8 78.72999999999999"
                              cy="4.386499999999998"
                              cx="52.8"
                              j="1"
                              val="95"
                              barHeight="83.34349999999999"
                              barWidth="14.4"
                            ></path>
                            <path
                              id="SvgjsPath1640"
                              d="M 52.8 78.72999999999999L 52.8 44.09199999999999Q 52.8 35.09199999999999 61.8 35.09199999999999L 58.2 35.09199999999999Q 67.2 35.09199999999999 67.2 44.09199999999999L 67.2 44.09199999999999L 67.2 78.72999999999999Q 67.2 87.72999999999999 58.2 87.72999999999999L 61.8 87.72999999999999Q 52.8 87.72999999999999 52.8 78.72999999999999z"
                              fill="#696cff29"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMask8b5lv0uw)"
                              pathTo="M 52.8 78.72999999999999L 52.8 44.09199999999999Q 52.8 35.09199999999999 61.8 35.09199999999999L 58.2 35.09199999999999Q 67.2 35.09199999999999 67.2 44.09199999999999L 67.2 44.09199999999999L 67.2 78.72999999999999Q 67.2 87.72999999999999 58.2 87.72999999999999L 61.8 87.72999999999999Q 52.8 87.72999999999999 52.8 78.72999999999999z"
                              pathFrom="M 52.8 78.72999999999999L 52.8 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 67.2 78.72999999999999L 52.8 78.72999999999999"
                              cy="35.09199999999999"
                              cx="76.8"
                              j="2"
                              val="60"
                              barHeight="52.638"
                              barWidth="14.4"
                            ></path>
                            <path
                              id="SvgjsPath1642"
                              d="M 76.8 78.72999999999999L 76.8 57.25149999999999Q 76.8 48.25149999999999 85.8 48.25149999999999L 82.2 48.25149999999999Q 91.2 48.25149999999999 91.2 57.25149999999999L 91.2 57.25149999999999L 91.2 78.72999999999999Q 91.2 87.72999999999999 82.2 87.72999999999999L 85.8 87.72999999999999Q 76.8 87.72999999999999 76.8 78.72999999999999z"
                              fill="#696cff29"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMask8b5lv0uw)"
                              pathTo="M 76.8 78.72999999999999L 76.8 57.25149999999999Q 76.8 48.25149999999999 85.8 48.25149999999999L 82.2 48.25149999999999Q 91.2 48.25149999999999 91.2 57.25149999999999L 91.2 57.25149999999999L 91.2 78.72999999999999Q 91.2 87.72999999999999 82.2 87.72999999999999L 85.8 87.72999999999999Q 76.8 87.72999999999999 76.8 78.72999999999999z"
                              pathFrom="M 76.8 78.72999999999999L 76.8 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 91.2 78.72999999999999L 76.8 78.72999999999999"
                              cy="48.25149999999999"
                              cx="100.8"
                              j="3"
                              val="45"
                              barHeight="39.4785"
                              barWidth="14.4"
                            ></path>
                            <path
                              id="SvgjsPath1644"
                              d="M 100.8 78.72999999999999L 100.8 17.772999999999996Q 100.8 8.772999999999996 109.8 8.772999999999996L 106.2 8.772999999999996Q 115.2 8.772999999999996 115.2 17.772999999999996L 115.2 17.772999999999996L 115.2 78.72999999999999Q 115.2 87.72999999999999 106.2 87.72999999999999L 109.8 87.72999999999999Q 100.8 87.72999999999999 100.8 78.72999999999999z"
                              fill="#696cff29"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMask8b5lv0uw)"
                              pathTo="M 100.8 78.72999999999999L 100.8 17.772999999999996Q 100.8 8.772999999999996 109.8 8.772999999999996L 106.2 8.772999999999996Q 115.2 8.772999999999996 115.2 17.772999999999996L 115.2 17.772999999999996L 115.2 78.72999999999999Q 115.2 87.72999999999999 106.2 87.72999999999999L 109.8 87.72999999999999Q 100.8 87.72999999999999 100.8 78.72999999999999z"
                              pathFrom="M 100.8 78.72999999999999L 100.8 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 115.2 78.72999999999999L 100.8 78.72999999999999"
                              cy="8.772999999999996"
                              cx="124.8"
                              j="4"
                              val="90"
                              barHeight="78.957"
                              barWidth="14.4"
                            ></path>
                            <path
                              id="SvgjsPath1646"
                              d="M 124.8 78.72999999999999L 124.8 52.864999999999995Q 124.8 43.864999999999995 133.8 43.864999999999995L 130.2 43.864999999999995Q 139.2 43.864999999999995 139.2 52.864999999999995L 139.2 52.864999999999995L 139.2 78.72999999999999Q 139.2 87.72999999999999 130.2 87.72999999999999L 133.8 87.72999999999999Q 124.8 87.72999999999999 124.8 78.72999999999999z"
                              fill="rgba(105,108,255,0.85)"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMask8b5lv0uw)"
                              pathTo="M 124.8 78.72999999999999L 124.8 52.864999999999995Q 124.8 43.864999999999995 133.8 43.864999999999995L 130.2 43.864999999999995Q 139.2 43.864999999999995 139.2 52.864999999999995L 139.2 52.864999999999995L 139.2 78.72999999999999Q 139.2 87.72999999999999 130.2 87.72999999999999L 133.8 87.72999999999999Q 124.8 87.72999999999999 124.8 78.72999999999999z"
                              pathFrom="M 124.8 78.72999999999999L 124.8 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 139.2 78.72999999999999L 124.8 78.72999999999999"
                              cy="43.864999999999995"
                              cx="148.8"
                              j="5"
                              val="50"
                              barHeight="43.864999999999995"
                              barWidth="14.4"
                            ></path>
                            <path
                              id="SvgjsPath1648"
                              d="M 148.8 78.72999999999999L 148.8 30.93249999999999Q 148.8 21.93249999999999 157.8 21.93249999999999L 154.20000000000002 21.93249999999999Q 163.20000000000002 21.93249999999999 163.20000000000002 30.93249999999999L 163.20000000000002 30.93249999999999L 163.20000000000002 78.72999999999999Q 163.20000000000002 87.72999999999999 154.20000000000002 87.72999999999999L 157.8 87.72999999999999Q 148.8 87.72999999999999 148.8 78.72999999999999z"
                              fill="#696cff29"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMask8b5lv0uw)"
                              pathTo="M 148.8 78.72999999999999L 148.8 30.93249999999999Q 148.8 21.93249999999999 157.8 21.93249999999999L 154.20000000000002 21.93249999999999Q 163.20000000000002 21.93249999999999 163.20000000000002 30.93249999999999L 163.20000000000002 30.93249999999999L 163.20000000000002 78.72999999999999Q 163.20000000000002 87.72999999999999 154.20000000000002 87.72999999999999L 157.8 87.72999999999999Q 148.8 87.72999999999999 148.8 78.72999999999999z"
                              pathFrom="M 148.8 78.72999999999999L 148.8 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 163.20000000000002 78.72999999999999L 148.8 78.72999999999999"
                              cy="21.93249999999999"
                              cx="172.8"
                              j="6"
                              val="75"
                              barHeight="65.7975"
                              barWidth="14.4"
                            ></path>
                            <g
                              id="SvgjsG1634"
                              class="apexcharts-bar-goals-markers"
                              style="pointer-events: none"
                            >
                              <g
                                id="SvgjsG1635"
                                className="apexcharts-bar-goals-groups"
                              ></g>
                              <g
                                id="SvgjsG1637"
                                className="apexcharts-bar-goals-groups"
                              ></g>
                              <g
                                id="SvgjsG1639"
                                className="apexcharts-bar-goals-groups"
                              ></g>
                              <g
                                id="SvgjsG1641"
                                className="apexcharts-bar-goals-groups"
                              ></g>
                              <g
                                id="SvgjsG1643"
                                className="apexcharts-bar-goals-groups"
                              ></g>
                              <g
                                id="SvgjsG1645"
                                className="apexcharts-bar-goals-groups"
                              ></g>
                              <g
                                id="SvgjsG1647"
                                className="apexcharts-bar-goals-groups"
                              ></g>
                            </g>
                          </g>
                          <g
                            id="SvgjsG1633"
                            class="apexcharts-datalabels"
                            data:realIndex="0"
                          ></g>
                        </g>
                        <line
                          id="SvgjsLine1685"
                          x1="0"
                          y1="0"
                          x2="168"
                          y2="0"
                          stroke="#b6b6b6"
                          stroke-dasharray="0"
                          stroke-width="1"
                          stroke-linecap="butt"
                          class="apexcharts-ycrosshairs"
                        ></line>
                        <line
                          id="SvgjsLine1686"
                          x1="0"
                          y1="0"
                          x2="168"
                          y2="0"
                          stroke-dasharray="0"
                          stroke-width="0"
                          stroke-linecap="butt"
                          class="apexcharts-ycrosshairs-hidden"
                        ></line>
                        <g
                          id="SvgjsG1687"
                          class="apexcharts-yaxis-annotations"
                        ></g>
                        <g
                          id="SvgjsG1688"
                          class="apexcharts-xaxis-annotations"
                        ></g>
                        <g
                          id="SvgjsG1689"
                          class="apexcharts-point-annotations"
                        ></g>
                      </g>
                      <g
                        id="SvgjsG1672"
                        class="apexcharts-yaxis"
                        rel="0"
                        transform="translate(-8, 0)"
                      >
                        <g
                          id="SvgjsG1673"
                          class="apexcharts-yaxis-texts-g"
                        ></g>
                      </g>
                      <g
                        id="SvgjsG1622"
                        class="apexcharts-annotations"
                      ></g>
                    </svg>
                    <div
                      class="apexcharts-legend"
                      style="max-height: 60px"
                    ></div>
                    <div
                      class="apexcharts-tooltip apexcharts-theme-light"
                    >
                      <div
                        class="apexcharts-tooltip-title"
                        style="
                          font-family: Helvetica, Arial, sans-serif;
                          font-size: 12px;
                        "
                      ></div>
                      <div
                        class="apexcharts-tooltip-series-group"
                        style="order: 1"
                      >
                        <span
                          class="apexcharts-tooltip-marker"
                          style="
                            background-color: rgba(
                              105,
                              108,
                              255,
                              0.16
                            );
                          "
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="
                            font-family: Helvetica, Arial,
                              sans-serif;
                            font-size: 12px;
                          "
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span
                              class="apexcharts-tooltip-text-y-label"
                            ></span
                            ><span
                              class="apexcharts-tooltip-text-y-value"
                            ></span>
                          </div>
                          <div
                            class="apexcharts-tooltip-goals-group"
                          >
                            <span
                              class="apexcharts-tooltip-text-goals-label"
                            ></span
                            ><span
                              class="apexcharts-tooltip-text-goals-value"
                            ></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span
                              class="apexcharts-tooltip-text-z-label"
                            ></span
                            ><span
                              class="apexcharts-tooltip-text-z-value"
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                    >
                      <div
                        class="apexcharts-yaxistooltip-text"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="resize-triggers">
                  <div class="expand-trigger">
                    <div style="width: 402px; height: 121px"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-6">
              <div
                class="card-title d-flex align-items-start justify-content-between"
              >
                <h5 class="mb-0">Activity</h5>
                <small>Last Week</small>
              </div>
              <div
                class="d-flex justify-content-between"
                style="position: relative"
              >
                <div class="mt-auto">
                  <h3 class="mb-1">82%</h3>
                  <small class="text-success text-nowrap fw-medium"
                    ><i class="bx bx-up-arrow-alt"></i> 24.8%</small
                  >
                </div>
                <div id="activityChart" style="min-height: 120px">
                  <div
                    id="apexchartsrjy65fnh"
                    class="apexcharts-canvas apexchartsrjy65fnh apexcharts-theme-light"
                    style="width: 220px; height: 120px"
                  >
                    <svg
                      id="SvgjsSvg1691"
                      width="220"
                      height="120"
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      xmlns:svgjs="http://svgjs.dev"
                      class="apexcharts-svg apexcharts-zoomable"
                      xmlns:data="ApexChartsNS"
                      transform="translate(0, 0)"
                      style="background: transparent"
                    >
                      <g
                        id="SvgjsG1693"
                        class="apexcharts-inner apexcharts-graphical"
                        transform="translate(22, 10)"
                      >
                        <defs id="SvgjsDefs1692">
                          <clippath id="gridRectMaskrjy65fnh">
                            <rect
                              id="SvgjsRect1698"
                              width="194"
                              height="80.72999999999999"
                              x="-3"
                              y="-1"
                              rx="0"
                              ry="0"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                              fill="#fff"
                            ></rect>
                          </clippath>
                          <clippath
                            id="forecastMaskrjy65fnh"
                          ></clippath>
                          <clippath
                            id="nonForecastMaskrjy65fnh"
                          ></clippath>
                          <clippath id="gridRectMarkerMaskrjy65fnh">
                            <rect
                              id="SvgjsRect1699"
                              width="192"
                              height="82.72999999999999"
                              x="-2"
                              y="-2"
                              rx="0"
                              ry="0"
                              opacity="1"
                              stroke-width="0"
                              stroke="none"
                              stroke-dasharray="0"
                              fill="#fff"
                            ></rect>
                          </clippath>
                          <lineargradient
                            id="SvgjsLinearGradient1704"
                            x1="0"
                            y1="0"
                            x2="0"
                            y2="1"
                          >
                            <stop
                              id="SvgjsStop1705"
                              stop-opacity="0.8"
                              stop-color="rgba(113,221,55,0.8)"
                              offset="0"
                            ></stop>
                            <stop
                              id="SvgjsStop1706"
                              stop-opacity="0.25"
                              stop-color="rgba(227,248,215,0.25)"
                              offset="0.85"
                            ></stop>
                            <stop
                              id="SvgjsStop1707"
                              stop-opacity="0.25"
                              stop-color="rgba(227,248,215,0.25)"
                              offset="1"
                            ></stop>
                          </lineargradient>
                        </defs>
                        <line
                          id="SvgjsLine1697"
                          x1="0"
                          y1="0"
                          x2="0"
                          y2="78.72999999999999"
                          stroke="#b6b6b6"
                          stroke-dasharray="3"
                          stroke-linecap="butt"
                          class="apexcharts-xcrosshairs"
                          x="0"
                          y="0"
                          width="1"
                          height="78.72999999999999"
                          fill="#b1b9c4"
                          filter="none"
                          fill-opacity="0.9"
                          stroke-width="1"
                        ></line>
                        <g
                          id="SvgjsG1710"
                          class="apexcharts-xaxis"
                          transform="translate(0, 0)"
                        >
                          <g
                            id="SvgjsG1711"
                            class="apexcharts-xaxis-texts-g"
                            transform="translate(0, -4)"
                          >
                            <text
                              id="SvgjsText1713"
                              font-family="Helvetica, Arial, sans-serif"
                              x="0"
                              y="107.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1714">Mo</tspan>
                              <title>Mo</title>
                            </text>
                            <text
                              id="SvgjsText1716"
                              font-family="Helvetica, Arial, sans-serif"
                              x="31.333333333333336"
                              y="107.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1717">Tu</tspan>
                              <title>Tu</title>
                            </text>
                            <text
                              id="SvgjsText1719"
                              font-family="Helvetica, Arial, sans-serif"
                              x="62.666666666666664"
                              y="107.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1720">We</tspan>
                              <title>We</title>
                            </text>
                            <text
                              id="SvgjsText1722"
                              font-family="Helvetica, Arial, sans-serif"
                              x="93.99999999999999"
                              y="107.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1723">Th</tspan>
                              <title>Th</title>
                            </text>
                            <text
                              id="SvgjsText1725"
                              font-family="Helvetica, Arial, sans-serif"
                              x="125.33333333333333"
                              y="107.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1726">Fr</tspan>
                              <title>Fr</title>
                            </text>
                            <text
                              id="SvgjsText1728"
                              font-family="Helvetica, Arial, sans-serif"
                              x="156.66666666666669"
                              y="107.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1729">Sa</tspan>
                              <title>Sa</title>
                            </text>
                            <text
                              id="SvgjsText1731"
                              font-family="Helvetica, Arial, sans-serif"
                              x="188.00000000000003"
                              y="107.72999999999999"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="13px"
                              font-weight="400"
                              fill="#a7acb2"
                              class="apexcharts-text apexcharts-xaxis-label"
                              style="
                                font-family: Helvetica, Arial,
                                  sans-serif;
                              "
                            >
                              <tspan id="SvgjsTspan1732">Su</tspan>
                              <title>Su</title>
                            </text>
                          </g>
                        </g>
                        <g id="SvgjsG1735" class="apexcharts-grid">
                          <g
                            id="SvgjsG1736"
                            class="apexcharts-gridlines-horizontal"
                            style="display: none"
                          >
                            <line
                              id="SvgjsLine1738"
                              x1="0"
                              y1="0"
                              x2="188"
                              y2="0"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1739"
                              x1="0"
                              y1="15.745999999999999"
                              x2="188"
                              y2="15.745999999999999"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1740"
                              x1="0"
                              y1="31.491999999999997"
                              x2="188"
                              y2="31.491999999999997"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1741"
                              x1="0"
                              y1="47.238"
                              x2="188"
                              y2="47.238"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1742"
                              x1="0"
                              y1="62.983999999999995"
                              x2="188"
                              y2="62.983999999999995"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine1743"
                              x1="0"
                              y1="78.72999999999999"
                              x2="188"
                              y2="78.72999999999999"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                          </g>
                          <g
                            id="SvgjsG1737"
                            class="apexcharts-gridlines-vertical"
                            style="display: none"
                          ></g>
                          <line
                            id="SvgjsLine1745"
                            x1="0"
                            y1="78.72999999999999"
                            x2="188"
                            y2="78.72999999999999"
                            stroke="transparent"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                          ></line>
                          <line
                            id="SvgjsLine1744"
                            x1="0"
                            y1="1"
                            x2="0"
                            y2="78.72999999999999"
                            stroke="transparent"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG1700"
                          class="apexcharts-area-series apexcharts-plot-series"
                        >
                          <g
                            id="SvgjsG1701"
                            class="apexcharts-series"
                            seriesName="seriesx1"
                            data:longestSeries="true"
                            rel="1"
                            data:realIndex="0"
                          >
                            <path
                              id="SvgjsPath1708"
                              d="M 0 78.72999999999999L 0 64.95224999999999C 10.966666666666667 64.95224999999999 20.366666666666667 51.174499999999995 31.333333333333336 51.174499999999995C 42.300000000000004 51.174499999999995 51.7 61.01574999999999 62.66666666666667 61.01574999999999C 73.63333333333334 61.01574999999999 83.03333333333335 15.745999999999995 94.00000000000001 15.745999999999995C 104.96666666666668 15.745999999999995 114.36666666666667 70.85699999999999 125.33333333333334 70.85699999999999C 136.3 70.85699999999999 145.70000000000002 25.587249999999997 156.66666666666669 25.587249999999997C 167.63333333333335 25.587249999999997 177.03333333333336 45.269749999999995 188.00000000000003 45.269749999999995C 188.00000000000003 45.269749999999995 188.00000000000003 45.269749999999995 188.00000000000003 78.72999999999999M 188.00000000000003 45.269749999999995z"
                              fill="url(#SvgjsLinearGradient1704)"
                              fill-opacity="1"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="0"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMaskrjy65fnh)"
                              pathTo="M 0 78.72999999999999L 0 64.95224999999999C 10.966666666666667 64.95224999999999 20.366666666666667 51.174499999999995 31.333333333333336 51.174499999999995C 42.300000000000004 51.174499999999995 51.7 61.01574999999999 62.66666666666667 61.01574999999999C 73.63333333333334 61.01574999999999 83.03333333333335 15.745999999999995 94.00000000000001 15.745999999999995C 104.96666666666668 15.745999999999995 114.36666666666667 70.85699999999999 125.33333333333334 70.85699999999999C 136.3 70.85699999999999 145.70000000000002 25.587249999999997 156.66666666666669 25.587249999999997C 167.63333333333335 25.587249999999997 177.03333333333336 45.269749999999995 188.00000000000003 45.269749999999995C 188.00000000000003 45.269749999999995 188.00000000000003 45.269749999999995 188.00000000000003 78.72999999999999M 188.00000000000003 45.269749999999995z"
                              pathFrom="M -1 94.47599999999998L -1 94.47599999999998L 31.333333333333336 94.47599999999998L 62.66666666666667 94.47599999999998L 94.00000000000001 94.47599999999998L 125.33333333333334 94.47599999999998L 156.66666666666669 94.47599999999998L 188.00000000000003 94.47599999999998"
                            ></path>
                            <path
                              id="SvgjsPath1709"
                              d="M 0 64.95224999999999C 10.966666666666667 64.95224999999999 20.366666666666667 51.174499999999995 31.333333333333336 51.174499999999995C 42.300000000000004 51.174499999999995 51.7 61.01574999999999 62.66666666666667 61.01574999999999C 73.63333333333334 61.01574999999999 83.03333333333335 15.745999999999995 94.00000000000001 15.745999999999995C 104.96666666666668 15.745999999999995 114.36666666666667 70.85699999999999 125.33333333333334 70.85699999999999C 136.3 70.85699999999999 145.70000000000002 25.587249999999997 156.66666666666669 25.587249999999997C 167.63333333333335 25.587249999999997 177.03333333333336 45.269749999999995 188.00000000000003 45.269749999999995"
                              fill="none"
                              fill-opacity="1"
                              stroke="#71dd37"
                              stroke-opacity="1"
                              stroke-linecap="butt"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-area"
                              index="0"
                              clip-path="url(#gridRectMaskrjy65fnh)"
                              pathTo="M 0 64.95224999999999C 10.966666666666667 64.95224999999999 20.366666666666667 51.174499999999995 31.333333333333336 51.174499999999995C 42.300000000000004 51.174499999999995 51.7 61.01574999999999 62.66666666666667 61.01574999999999C 73.63333333333334 61.01574999999999 83.03333333333335 15.745999999999995 94.00000000000001 15.745999999999995C 104.96666666666668 15.745999999999995 114.36666666666667 70.85699999999999 125.33333333333334 70.85699999999999C 136.3 70.85699999999999 145.70000000000002 25.587249999999997 156.66666666666669 25.587249999999997C 167.63333333333335 25.587249999999997 177.03333333333336 45.269749999999995 188.00000000000003 45.269749999999995"
                              pathFrom="M -1 94.47599999999998L -1 94.47599999999998L 31.333333333333336 94.47599999999998L 62.66666666666667 94.47599999999998L 94.00000000000001 94.47599999999998L 125.33333333333334 94.47599999999998L 156.66666666666669 94.47599999999998L 188.00000000000003 94.47599999999998"
                            ></path>
                            <g
                              id="SvgjsG1702"
                              class="apexcharts-series-markers-wrap"
                              data:realIndex="0"
                            >
                              <g class="apexcharts-series-markers">
                                <circle
                                  id="SvgjsCircle1751"
                                  r="0"
                                  cx="0"
                                  cy="0"
                                  class="apexcharts-marker w78nmabdu no-pointer-events"
                                  stroke="#ffffff"
                                  fill="#71dd37"
                                  fill-opacity="1"
                                  stroke-width="2"
                                  stroke-opacity="0.9"
                                  default-marker-size="0"
                                ></circle>
                              </g>
                            </g>
                          </g>
                          <g
                            id="SvgjsG1703"
                            class="apexcharts-datalabels"
                            data:realIndex="0"
                          ></g>
                        </g>
                        <line
                          id="SvgjsLine1746"
                          x1="0"
                          y1="0"
                          x2="188"
                          y2="0"
                          stroke="#b6b6b6"
                          stroke-dasharray="0"
                          stroke-width="1"
                          stroke-linecap="butt"
                          class="apexcharts-ycrosshairs"
                        ></line>
                        <line
                          id="SvgjsLine1747"
                          x1="0"
                          y1="0"
                          x2="188"
                          y2="0"
                          stroke-dasharray="0"
                          stroke-width="0"
                          stroke-linecap="butt"
                          class="apexcharts-ycrosshairs-hidden"
                        ></line>
                        <g
                          id="SvgjsG1748"
                          class="apexcharts-yaxis-annotations"
                        ></g>
                        <g
                          id="SvgjsG1749"
                          class="apexcharts-xaxis-annotations"
                        ></g>
                        <g
                          id="SvgjsG1750"
                          class="apexcharts-point-annotations"
                        ></g>
                        <rect
                          id="SvgjsRect1752"
                          width="0"
                          height="0"
                          x="0"
                          y="0"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fefefe"
                          class="apexcharts-zoom-rect"
                        ></rect>
                        <rect
                          id="SvgjsRect1753"
                          width="0"
                          height="0"
                          x="0"
                          y="0"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fefefe"
                          class="apexcharts-selection-rect"
                        ></rect>
                      </g>
                      <rect
                        id="SvgjsRect1696"
                        width="0"
                        height="0"
                        x="0"
                        y="0"
                        rx="0"
                        ry="0"
                        opacity="1"
                        stroke-width="0"
                        stroke="none"
                        stroke-dasharray="0"
                        fill="#fefefe"
                      ></rect>
                      <g
                        id="SvgjsG1733"
                        class="apexcharts-yaxis"
                        rel="0"
                        transform="translate(-8, 0)"
                      >
                        <g
                          id="SvgjsG1734"
                          class="apexcharts-yaxis-texts-g"
                        ></g>
                      </g>
                      <g
                        id="SvgjsG1694"
                        class="apexcharts-annotations"
                      ></g>
                    </svg>
                    <div
                      class="apexcharts-legend"
                      style="max-height: 60px"
                    ></div>
                    <div
                      class="apexcharts-tooltip apexcharts-theme-light"
                    >
                      <div
                        class="apexcharts-tooltip-title"
                        style="
                          font-family: Helvetica, Arial, sans-serif;
                          font-size: 12px;
                        "
                      ></div>
                      <div
                        class="apexcharts-tooltip-series-group"
                        style="order: 1"
                      >
                        <span
                          class="apexcharts-tooltip-marker"
                          style="
                            background-color: rgb(113, 221, 55);
                          "
                        ></span>
                        <div
                          class="apexcharts-tooltip-text"
                          style="
                            font-family: Helvetica, Arial,
                              sans-serif;
                            font-size: 12px;
                          "
                        >
                          <div class="apexcharts-tooltip-y-group">
                            <span
                              class="apexcharts-tooltip-text-y-label"
                            ></span
                            ><span
                              class="apexcharts-tooltip-text-y-value"
                            ></span>
                          </div>
                          <div
                            class="apexcharts-tooltip-goals-group"
                          >
                            <span
                              class="apexcharts-tooltip-text-goals-label"
                            ></span
                            ><span
                              class="apexcharts-tooltip-text-goals-value"
                            ></span>
                          </div>
                          <div class="apexcharts-tooltip-z-group">
                            <span
                              class="apexcharts-tooltip-text-z-label"
                            ></span
                            ><span
                              class="apexcharts-tooltip-text-z-value"
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                    >
                      <div
                        class="apexcharts-xaxistooltip-text"
                        style="
                          font-family: Helvetica, Arial, sans-serif;
                          font-size: 12px;
                        "
                      ></div>
                    </div>
                    <div
                      class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                    >
                      <div
                        class="apexcharts-yaxistooltip-text"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="resize-triggers">
                  <div class="expand-trigger">
                    <div style="width: 403px; height: 121px"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ New Visitors & Activity -->

    <div class="col-lg-12 col-xxl-12">
      <div class="row">
        <div class="col-xxl-3 col-md-3 col-6 mb-6">
          <div class="card h-100">
            <div class="card-body">
              <div
                class="card-title d-flex align-items-start justify-content-between mb-4"
              >
                <div class="avatar flex-shrink-0">
                  <img
                    src="./assets/wallet-info.png"
                    alt="wallet info"
                    class="rounded"
                  />
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="cardOpt6"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i
                      class="bx bx-dots-vertical-rounded text-muted"
                    ></i>
                  </button>
                  <div
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="cardOpt6"
                  >
                    <a
                      class="dropdown-item"
                      href="javascript:void(0);"
                      >View More</a
                    >
                    <a
                      class="dropdown-item"
                      href="javascript:void(0);"
                      >Delete</a
                    >
                  </div>
                </div>
              </div>
              <p class="mb-1">Sales</p>
              <h4 class="card-title mb-3">₹114,679</h4>
              <small class="text-success fw-medium"
                ><i class="bx bx-up-arrow-alt"></i> +28.42%</small
              >
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-md-3 col-6 mb-6">
          <div class="card h-100">
            <div class="card-body pb-2" style="position: relative">
              <span class="d-block fw-medium mb-1">Profit</span>
              <h4 class="card-title mb-4">624k</h4>
              <div id="profitChart" style="min-height: 95px">
                <div
                  id="apexchartsollm4hc7"
                  class="apexcharts-canvas apexchartsollm4hc7 apexcharts-theme-light"
                  style="width: 162px; height: 80px"
                >
                  <svg
                    id="SvgjsSvg1754"
                    width="162"
                    height="80"
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.dev"
                    class="apexcharts-svg"
                    xmlns:data="ApexChartsNS"
                    transform="translate(0, 0)"
                    style="background: transparent"
                  >
                    <g
                      id="SvgjsG1756"
                      class="apexcharts-inner apexcharts-graphical"
                      transform="translate(0, 0)"
                    >
                      <defs id="SvgjsDefs1755">
                        <lineargradient
                          id="SvgjsLinearGradient1759"
                          x1="0"
                          y1="0"
                          x2="0"
                          y2="1"
                        >
                          <stop
                            id="SvgjsStop1760"
                            stop-opacity="0.4"
                            stop-color="rgba(216,227,240,0.4)"
                            offset="0"
                          ></stop>
                          <stop
                            id="SvgjsStop1761"
                            stop-opacity="0.5"
                            stop-color="rgba(190,209,230,0.5)"
                            offset="1"
                          ></stop>
                          <stop
                            id="SvgjsStop1762"
                            stop-opacity="0.5"
                            stop-color="rgba(190,209,230,0.5)"
                            offset="1"
                          ></stop>
                        </lineargradient>
                        <clippath id="gridRectMaskollm4hc7">
                          <rect
                            id="SvgjsRect1764"
                            width="171"
                            height="57.73"
                            x="-4.5"
                            y="-2.5"
                            rx="0"
                            ry="0"
                            opacity="1"
                            stroke-width="0"
                            stroke="none"
                            stroke-dasharray="0"
                            fill="#fff"
                          ></rect>
                        </clippath>
                        <clippath
                          id="forecastMaskollm4hc7"
                        ></clippath>
                        <clippath
                          id="nonForecastMaskollm4hc7"
                        ></clippath>
                        <clippath id="gridRectMarkerMaskollm4hc7">
                          <rect
                            id="SvgjsRect1765"
                            width="166"
                            height="56.73"
                            x="-2"
                            y="-2"
                            rx="0"
                            ry="0"
                            opacity="1"
                            stroke-width="0"
                            stroke="none"
                            stroke-dasharray="0"
                            fill="#fff"
                          ></rect>
                        </clippath>
                      </defs>
                      <rect
                        id="SvgjsRect1763"
                        width="13.1625"
                        height="52.73"
                        x="0"
                        y="0"
                        rx="0"
                        ry="0"
                        opacity="1"
                        stroke-width="0"
                        stroke-dasharray="3"
                        fill="url(#SvgjsLinearGradient1759)"
                        class="apexcharts-xcrosshairs"
                        y2="52.73"
                        filter="none"
                        fill-opacity="0.9"
                      ></rect>
                      <g
                        id="SvgjsG1789"
                        class="apexcharts-xaxis"
                        transform="translate(0, 0)"
                      >
                        <g
                          id="SvgjsG1790"
                          class="apexcharts-xaxis-texts-g"
                          transform="translate(0, -4)"
                        >
                          <text
                            id="SvgjsText1792"
                            font-family="Helvetica, Arial, sans-serif"
                            x="20.25"
                            y="81.72999999999999"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="
                              font-family: Helvetica, Arial,
                                sans-serif;
                            "
                          >
                            <tspan id="SvgjsTspan1793">Jan</tspan>
                            <title>Jan</title>
                          </text>
                          <text
                            id="SvgjsText1795"
                            font-family="Helvetica, Arial, sans-serif"
                            x="60.75"
                            y="81.72999999999999"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="
                              font-family: Helvetica, Arial,
                                sans-serif;
                            "
                          >
                            <tspan id="SvgjsTspan1796">Apr</tspan>
                            <title>Apr</title>
                          </text>
                          <text
                            id="SvgjsText1798"
                            font-family="Helvetica, Arial, sans-serif"
                            x="101.25"
                            y="81.72999999999999"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="
                              font-family: Helvetica, Arial,
                                sans-serif;
                            "
                          >
                            <tspan id="SvgjsTspan1799">Jul</tspan>
                            <title>Jul</title>
                          </text>
                          <text
                            id="SvgjsText1801"
                            font-family="Helvetica, Arial, sans-serif"
                            x="141.75"
                            y="81.72999999999999"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="
                              font-family: Helvetica, Arial,
                                sans-serif;
                            "
                          >
                            <tspan id="SvgjsTspan1802">Oct</tspan>
                            <title>Oct</title>
                          </text>
                        </g>
                      </g>
                      <g id="SvgjsG1805" class="apexcharts-grid">
                        <g
                          id="SvgjsG1806"
                          class="apexcharts-gridlines-horizontal"
                          style="display: none"
                        >
                          <line
                            id="SvgjsLine1808"
                            x1="0"
                            y1="0"
                            x2="162"
                            y2="0"
                            stroke="#e0e0e0"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                          <line
                            id="SvgjsLine1809"
                            x1="0"
                            y1="13.1825"
                            x2="162"
                            y2="13.1825"
                            stroke="#e0e0e0"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                          <line
                            id="SvgjsLine1810"
                            x1="0"
                            y1="26.365"
                            x2="162"
                            y2="26.365"
                            stroke="#e0e0e0"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                          <line
                            id="SvgjsLine1811"
                            x1="0"
                            y1="39.5475"
                            x2="162"
                            y2="39.5475"
                            stroke="#e0e0e0"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                          <line
                            id="SvgjsLine1812"
                            x1="0"
                            y1="52.73"
                            x2="162"
                            y2="52.73"
                            stroke="#e0e0e0"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG1807"
                          class="apexcharts-gridlines-vertical"
                          style="display: none"
                        ></g>
                        <line
                          id="SvgjsLine1814"
                          x1="0"
                          y1="52.73"
                          x2="162"
                          y2="52.73"
                          stroke="transparent"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                        ></line>
                        <line
                          id="SvgjsLine1813"
                          x1="0"
                          y1="1"
                          x2="0"
                          y2="52.73"
                          stroke="transparent"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                        ></line>
                      </g>
                      <g
                        id="SvgjsG1766"
                        class="apexcharts-bar-series apexcharts-plot-series"
                      >
                        <g
                          id="SvgjsG1767"
                          class="apexcharts-series"
                          rel="1"
                          seriesName="seriesx1"
                          data:realIndex="0"
                        >
                          <path
                            id="SvgjsPath1771"
                            d="M 7.0875 49.73L 7.0875 17.500750000000004Q 7.0875 14.500750000000004 10.0875 14.500750000000004L 12.25 14.500750000000004Q 15.25 14.500750000000004 15.25 17.500750000000004L 15.25 17.500750000000004L 15.25 49.73Q 15.25 52.73 12.25 52.73L 10.0875 52.73Q 7.0875 52.73 7.0875 49.73z"
                            fill="rgba(113,221,55,0.85)"
                            fill-opacity="1"
                            stroke="#"
                            stroke-opacity="1"
                            stroke-linecap="round"
                            stroke-width="5"
                            stroke-dasharray="0"
                            class="apexcharts-bar-area"
                            index="0"
                            clip-path="url(#gridRectMaskollm4hc7)"
                            pathTo="M 7.0875 49.73L 7.0875 17.500750000000004Q 7.0875 14.500750000000004 10.0875 14.500750000000004L 12.25 14.500750000000004Q 15.25 14.500750000000004 15.25 17.500750000000004L 15.25 17.500750000000004L 15.25 49.73Q 15.25 52.73 12.25 52.73L 10.0875 52.73Q 7.0875 52.73 7.0875 49.73z"
                            pathFrom="M 7.0875 49.73L 7.0875 49.73L 15.25 49.73L 15.25 49.73L 15.25 49.73L 15.25 49.73L 15.25 49.73L 7.0875 49.73"
                            cy="14.500750000000004"
                            cx="45.0875"
                            j="0"
                            val="58"
                            barHeight="38.22924999999999"
                            barWidth="13.1625"
                          ></path>
                          <path
                            id="SvgjsPath1773"
                            d="M 47.5875 49.73L 47.5875 37.2745Q 47.5875 34.2745 50.5875 34.2745L 52.75 34.2745Q 55.75 34.2745 55.75 37.2745L 55.75 37.2745L 55.75 49.73Q 55.75 52.73 52.75 52.73L 50.5875 52.73Q 47.5875 52.73 47.5875 49.73z"
                            fill="rgba(113,221,55,0.85)"
                            fill-opacity="1"
                            stroke="#"
                            stroke-opacity="1"
                            stroke-linecap="round"
                            stroke-width="5"
                            stroke-dasharray="0"
                            class="apexcharts-bar-area"
                            index="0"
                            clip-path="url(#gridRectMaskollm4hc7)"
                            pathTo="M 47.5875 49.73L 47.5875 37.2745Q 47.5875 34.2745 50.5875 34.2745L 52.75 34.2745Q 55.75 34.2745 55.75 37.2745L 55.75 37.2745L 55.75 49.73Q 55.75 52.73 52.75 52.73L 50.5875 52.73Q 47.5875 52.73 47.5875 49.73z"
                            pathFrom="M 47.5875 49.73L 47.5875 49.73L 55.75 49.73L 55.75 49.73L 55.75 49.73L 55.75 49.73L 55.75 49.73L 47.5875 49.73"
                            cy="34.2745"
                            cx="85.5875"
                            j="1"
                            val="28"
                            barHeight="18.455499999999997"
                            barWidth="13.1625"
                          ></path>
                          <path
                            id="SvgjsPath1775"
                            d="M 88.0875 49.73L 88.0875 22.77375Q 88.0875 19.77375 91.0875 19.77375L 93.25 19.77375Q 96.25 19.77375 96.25 22.77375L 96.25 22.77375L 96.25 49.73Q 96.25 52.73 93.25 52.73L 91.0875 52.73Q 88.0875 52.73 88.0875 49.73z"
                            fill="rgba(113,221,55,0.85)"
                            fill-opacity="1"
                            stroke="#"
                            stroke-opacity="1"
                            stroke-linecap="round"
                            stroke-width="5"
                            stroke-dasharray="0"
                            class="apexcharts-bar-area"
                            index="0"
                            clip-path="url(#gridRectMaskollm4hc7)"
                            pathTo="M 88.0875 49.73L 88.0875 22.77375Q 88.0875 19.77375 91.0875 19.77375L 93.25 19.77375Q 96.25 19.77375 96.25 22.77375L 96.25 22.77375L 96.25 49.73Q 96.25 52.73 93.25 52.73L 91.0875 52.73Q 88.0875 52.73 88.0875 49.73z"
                            pathFrom="M 88.0875 49.73L 88.0875 49.73L 96.25 49.73L 96.25 49.73L 96.25 49.73L 96.25 49.73L 96.25 49.73L 88.0875 49.73"
                            cy="19.77375"
                            cx="126.0875"
                            j="2"
                            val="50"
                            barHeight="32.95625"
                            barWidth="13.1625"
                          ></path>
                          <path
                            id="SvgjsPath1777"
                            d="M 128.5875 49.73L 128.5875 3Q 128.5875 0 131.5875 0L 133.75 0Q 136.75 0 136.75 3L 136.75 3L 136.75 49.73Q 136.75 52.73 133.75 52.73L 131.5875 52.73Q 128.5875 52.73 128.5875 49.73z"
                            fill="rgba(113,221,55,0.85)"
                            fill-opacity="1"
                            stroke="#"
                            stroke-opacity="1"
                            stroke-linecap="round"
                            stroke-width="5"
                            stroke-dasharray="0"
                            class="apexcharts-bar-area"
                            index="0"
                            clip-path="url(#gridRectMaskollm4hc7)"
                            pathTo="M 128.5875 49.73L 128.5875 3Q 128.5875 0 131.5875 0L 133.75 0Q 136.75 0 136.75 3L 136.75 3L 136.75 49.73Q 136.75 52.73 133.75 52.73L 131.5875 52.73Q 128.5875 52.73 128.5875 49.73z"
                            pathFrom="M 128.5875 49.73L 128.5875 49.73L 136.75 49.73L 136.75 49.73L 136.75 49.73L 136.75 49.73L 136.75 49.73L 128.5875 49.73"
                            cy="0"
                            cx="166.5875"
                            j="3"
                            val="80"
                            barHeight="52.73"
                            barWidth="13.1625"
                          ></path>
                          <g
                            id="SvgjsG1769"
                            class="apexcharts-bar-goals-markers"
                            style="pointer-events: none"
                          >
                            <g
                              id="SvgjsG1770"
                              className="apexcharts-bar-goals-groups"
                            ></g>
                            <g
                              id="SvgjsG1772"
                              className="apexcharts-bar-goals-groups"
                            ></g>
                            <g
                              id="SvgjsG1774"
                              className="apexcharts-bar-goals-groups"
                            ></g>
                            <g
                              id="SvgjsG1776"
                              className="apexcharts-bar-goals-groups"
                            ></g>
                          </g>
                        </g>
                        <g
                          id="SvgjsG1778"
                          class="apexcharts-series"
                          rel="2"
                          seriesName="seriesx2"
                          data:realIndex="1"
                        >
                          <path
                            id="SvgjsPath1782"
                            d="M 20.25 49.73L 20.25 22.77375Q 20.25 19.77375 23.25 19.77375L 25.4125 19.77375Q 28.4125 19.77375 28.4125 22.77375L 28.4125 22.77375L 28.4125 49.73Q 28.4125 52.73 25.4125 52.73L 23.25 52.73Q 20.25 52.73 20.25 49.73z"
                            fill="#71dd3729"
                            fill-opacity="1"
                            stroke="a"
                            stroke-opacity="1"
                            stroke-linecap="round"
                            stroke-width="5"
                            stroke-dasharray="0"
                            class="apexcharts-bar-area"
                            index="1"
                            clip-path="url(#gridRectMaskollm4hc7)"
                            pathTo="M 20.25 49.73L 20.25 22.77375Q 20.25 19.77375 23.25 19.77375L 25.4125 19.77375Q 28.4125 19.77375 28.4125 22.77375L 28.4125 22.77375L 28.4125 49.73Q 28.4125 52.73 25.4125 52.73L 23.25 52.73Q 20.25 52.73 20.25 49.73z"
                            pathFrom="M 20.25 49.73L 20.25 49.73L 28.4125 49.73L 28.4125 49.73L 28.4125 49.73L 28.4125 49.73L 28.4125 49.73L 20.25 49.73"
                            cy="16.77375"
                            cx="58.25"
                            j="0"
                            val="50"
                            barHeight="32.95625"
                            barWidth="13.1625"
                          ></path>
                          <path
                            id="SvgjsPath1784"
                            d="M 60.75 49.73L 60.75 41.22925Q 60.75 38.22925 63.75 38.22925L 65.9125 38.22925Q 68.9125 38.22925 68.9125 41.22925L 68.9125 41.22925L 68.9125 49.73Q 68.9125 52.73 65.9125 52.73L 63.75 52.73Q 60.75 52.73 60.75 49.73z"
                            fill="#71dd3729"
                            fill-opacity="1"
                            stroke="a"
                            stroke-opacity="1"
                            stroke-linecap="round"
                            stroke-width="5"
                            stroke-dasharray="0"
                            class="apexcharts-bar-area"
                            index="1"
                            clip-path="url(#gridRectMaskollm4hc7)"
                            pathTo="M 60.75 49.73L 60.75 41.22925Q 60.75 38.22925 63.75 38.22925L 65.9125 38.22925Q 68.9125 38.22925 68.9125 41.22925L 68.9125 41.22925L 68.9125 49.73Q 68.9125 52.73 65.9125 52.73L 63.75 52.73Q 60.75 52.73 60.75 49.73z"
                            pathFrom="M 60.75 49.73L 60.75 49.73L 68.9125 49.73L 68.9125 49.73L 68.9125 49.73L 68.9125 49.73L 68.9125 49.73L 60.75 49.73"
                            cy="35.22925"
                            cx="98.75"
                            j="1"
                            val="22"
                            barHeight="14.500749999999998"
                            barWidth="13.1625"
                          ></path>
                          <path
                            id="SvgjsPath1786"
                            d="M 101.25 49.73L 101.25 12.886875000000003Q 101.25 9.886875000000003 104.25 9.886875000000003L 106.4125 9.886875000000003Q 109.4125 9.886875000000003 109.4125 12.886875000000003L 109.4125 12.886875000000003L 109.4125 49.73Q 109.4125 52.73 106.4125 52.73L 104.25 52.73Q 101.25 52.73 101.25 49.73z"
                            fill="#71dd3729"
                            fill-opacity="1"
                            stroke="a"
                            stroke-opacity="1"
                            stroke-linecap="round"
                            stroke-width="5"
                            stroke-dasharray="0"
                            class="apexcharts-bar-area"
                            index="1"
                            clip-path="url(#gridRectMaskollm4hc7)"
                            pathTo="M 101.25 49.73L 101.25 12.886875000000003Q 101.25 9.886875000000003 104.25 9.886875000000003L 106.4125 9.886875000000003Q 109.4125 9.886875000000003 109.4125 12.886875000000003L 109.4125 12.886875000000003L 109.4125 49.73Q 109.4125 52.73 106.4125 52.73L 104.25 52.73Q 101.25 52.73 101.25 49.73z"
                            pathFrom="M 101.25 49.73L 101.25 49.73L 109.4125 49.73L 109.4125 49.73L 109.4125 49.73L 109.4125 49.73L 109.4125 49.73L 101.25 49.73"
                            cy="6.886875000000003"
                            cx="139.25"
                            j="2"
                            val="65"
                            barHeight="42.84312499999999"
                            barWidth="13.1625"
                          ></path>
                          <path
                            id="SvgjsPath1788"
                            d="M 141.75 49.73L 141.75 8.273000000000003Q 141.75 5.273000000000003 144.75 5.273000000000003L 146.9125 5.273000000000003Q 149.9125 5.273000000000003 149.9125 8.273000000000003L 149.9125 8.273000000000003L 149.9125 49.73Q 149.9125 52.73 146.9125 52.73L 144.75 52.73Q 141.75 52.73 141.75 49.73z"
                            fill="#71dd3729"
                            fill-opacity="1"
                            stroke="a"
                            stroke-opacity="1"
                            stroke-linecap="round"
                            stroke-width="5"
                            stroke-dasharray="0"
                            class="apexcharts-bar-area"
                            index="1"
                            clip-path="url(#gridRectMaskollm4hc7)"
                            pathTo="M 141.75 49.73L 141.75 8.273000000000003Q 141.75 5.273000000000003 144.75 5.273000000000003L 146.9125 5.273000000000003Q 149.9125 5.273000000000003 149.9125 8.273000000000003L 149.9125 8.273000000000003L 149.9125 49.73Q 149.9125 52.73 146.9125 52.73L 144.75 52.73Q 141.75 52.73 141.75 49.73z"
                            pathFrom="M 141.75 49.73L 141.75 49.73L 149.9125 49.73L 149.9125 49.73L 149.9125 49.73L 149.9125 49.73L 149.9125 49.73L 141.75 49.73"
                            cy="2.2730000000000032"
                            cx="179.75"
                            j="3"
                            val="72"
                            barHeight="47.456999999999994"
                            barWidth="13.1625"
                          ></path>
                          <g
                            id="SvgjsG1780"
                            class="apexcharts-bar-goals-markers"
                            style="pointer-events: none"
                          >
                            <g
                              id="SvgjsG1781"
                              className="apexcharts-bar-goals-groups"
                            ></g>
                            <g
                              id="SvgjsG1783"
                              className="apexcharts-bar-goals-groups"
                            ></g>
                            <g
                              id="SvgjsG1785"
                              className="apexcharts-bar-goals-groups"
                            ></g>
                            <g
                              id="SvgjsG1787"
                              className="apexcharts-bar-goals-groups"
                            ></g>
                          </g>
                        </g>
                        <g
                          id="SvgjsG1768"
                          class="apexcharts-datalabels"
                          data:realIndex="0"
                        ></g>
                        <g
                          id="SvgjsG1779"
                          class="apexcharts-datalabels"
                          data:realIndex="1"
                        ></g>
                      </g>
                      <line
                        id="SvgjsLine1815"
                        x1="0"
                        y1="0"
                        x2="162"
                        y2="0"
                        stroke="#b6b6b6"
                        stroke-dasharray="0"
                        stroke-width="1"
                        stroke-linecap="butt"
                        class="apexcharts-ycrosshairs"
                      ></line>
                      <line
                        id="SvgjsLine1816"
                        x1="0"
                        y1="0"
                        x2="162"
                        y2="0"
                        stroke-dasharray="0"
                        stroke-width="0"
                        stroke-linecap="butt"
                        class="apexcharts-ycrosshairs-hidden"
                      ></line>
                      <g
                        id="SvgjsG1817"
                        class="apexcharts-yaxis-annotations"
                      ></g>
                      <g
                        id="SvgjsG1818"
                        class="apexcharts-xaxis-annotations"
                      ></g>
                      <g
                        id="SvgjsG1819"
                        class="apexcharts-point-annotations"
                      ></g>
                    </g>
                    <g
                      id="SvgjsG1803"
                      class="apexcharts-yaxis"
                      rel="0"
                      transform="translate(-8, 0)"
                    >
                      <g
                        id="SvgjsG1804"
                        class="apexcharts-yaxis-texts-g"
                      ></g>
                    </g>
                    <g
                      id="SvgjsG1757"
                      class="apexcharts-annotations"
                    ></g>
                  </svg>
                  <div
                    class="apexcharts-legend"
                    style="max-height: 40px"
                  ></div>
                  <div
                    class="apexcharts-tooltip apexcharts-theme-light"
                  >
                    <div
                      class="apexcharts-tooltip-title"
                      style="
                        font-family: Helvetica, Arial, sans-serif;
                        font-size: 12px;
                      "
                    ></div>
                    <div
                      class="apexcharts-tooltip-series-group"
                      style="order: 1"
                    >
                      <span
                        class="apexcharts-tooltip-marker"
                        style="background-color: rgb(113, 221, 55)"
                      ></span>
                      <div
                        class="apexcharts-tooltip-text"
                        style="
                          font-family: Helvetica, Arial, sans-serif;
                          font-size: 12px;
                        "
                      >
                        <div class="apexcharts-tooltip-y-group">
                          <span
                            class="apexcharts-tooltip-text-y-label"
                          ></span
                          ><span
                            class="apexcharts-tooltip-text-y-value"
                          ></span>
                        </div>
                        <div class="apexcharts-tooltip-goals-group">
                          <span
                            class="apexcharts-tooltip-text-goals-label"
                          ></span
                          ><span
                            class="apexcharts-tooltip-text-goals-value"
                          ></span>
                        </div>
                        <div class="apexcharts-tooltip-z-group">
                          <span
                            class="apexcharts-tooltip-text-z-label"
                          ></span
                          ><span
                            class="apexcharts-tooltip-text-z-value"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <div
                      class="apexcharts-tooltip-series-group"
                      style="order: 2"
                    >
                      <span
                        class="apexcharts-tooltip-marker"
                        style="
                          background-color: rgba(
                            113,
                            221,
                            55,
                            0.16
                          );
                        "
                      ></span>
                      <div
                        class="apexcharts-tooltip-text"
                        style="
                          font-family: Helvetica, Arial, sans-serif;
                          font-size: 12px;
                        "
                      >
                        <div class="apexcharts-tooltip-y-group">
                          <span
                            class="apexcharts-tooltip-text-y-label"
                          ></span
                          ><span
                            class="apexcharts-tooltip-text-y-value"
                          ></span>
                        </div>
                        <div class="apexcharts-tooltip-goals-group">
                          <span
                            class="apexcharts-tooltip-text-goals-label"
                          ></span
                          ><span
                            class="apexcharts-tooltip-text-goals-value"
                          ></span>
                        </div>
                        <div class="apexcharts-tooltip-z-group">
                          <span
                            class="apexcharts-tooltip-text-z-label"
                          ></span
                          ><span
                            class="apexcharts-tooltip-text-z-value"
                          ></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                  >
                    <div class="apexcharts-yaxistooltip-text"></div>
                  </div>
                  <div
                    class="apexcharts-toolbar"
                    style="top: 0px; right: 3px"
                  >
                    <div class="apexcharts-menu">
                      <div
                        class="apexcharts-menu-item exportSVG"
                        title="Download SVG"
                      >
                        Download SVG
                      </div>
                      <div
                        class="apexcharts-menu-item exportPNG"
                        title="Download PNG"
                      >
                        Download PNG
                      </div>
                      <div
                        class="apexcharts-menu-item exportCSV"
                        title="Download CSV"
                      >
                        Download CSV
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="resize-triggers">
                <div class="expand-trigger">
                  <div style="width: 211px; height: 207px"></div>
                </div>
                <div class="contract-trigger"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-md-3 col-6 mb-6">
          <div class="card h-100">
            <div class="card-body pb-0">
              <span class="d-block fw-medium mb-1">Orders</span>
            </div>
            <div
              id="expensesChart"
              class="mb-2"
              style="min-height: 68.5px"
            >
              <div
                id="apexchartsxzv5y8fqi"
                class="apexcharts-canvas apexchartsxzv5y8fqi apexcharts-theme-light"
                style="width: 210px; height: 68.5px"
              >
                <svg
                  id="SvgjsSvg1820"
                  width="210"
                  height="68.5"
                  xmlns="http://www.w3.org/2000/svg"
                  version="1.1"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xmlns:svgjs="http://svgjs.dev"
                  class="apexcharts-svg"
                  xmlns:data="ApexChartsNS"
                  transform="translate(0, 0)"
                  style="background: transparent"
                >
                  <g
                    id="SvgjsG1822"
                    class="apexcharts-inner apexcharts-graphical"
                    transform="translate(30, 0)"
                  >
                    <defs id="SvgjsDefs1821">
                      <clippath id="gridRectMaskxzv5y8fqi">
                        <rect
                          id="SvgjsRect1824"
                          width="156"
                          height="127"
                          x="-3"
                          y="-1"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fff"
                        ></rect>
                      </clippath>
                      <clippath
                        id="forecastMaskxzv5y8fqi"
                      ></clippath>
                      <clippath
                        id="nonForecastMaskxzv5y8fqi"
                      ></clippath>
                      <clippath id="gridRectMarkerMaskxzv5y8fqi">
                        <rect
                          id="SvgjsRect1825"
                          width="154"
                          height="129"
                          x="-2"
                          y="-2"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fff"
                        ></rect>
                      </clippath>
                    </defs>
                    <g id="SvgjsG1826" class="apexcharts-radialbar">
                      <g id="SvgjsG1827">
                        <g
                          id="SvgjsG1828"
                          class="apexcharts-tracks"
                        >
                          <g
                            id="SvgjsG1829"
                            class="apexcharts-radialbar-track apexcharts-track"
                            rel="1"
                          >
                            <path
                              id="apexcharts-radialbarTrack-0"
                              d="M 32.10365853658536 62.49999999999999 A 42.89634146341464 42.89634146341464 0 0 1 117.89634146341464 62.5"
                              fill="none"
                              fill-opacity="1"
                              stroke="#8592a329"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="8.457926829268295"
                              stroke-dasharray="0"
                              class="apexcharts-radialbar-area"
                              data:pathOrig="M 32.10365853658536 62.49999999999999 A 42.89634146341464 42.89634146341464 0 0 1 117.89634146341464 62.5"
                            ></path>
                          </g>
                        </g>
                        <g id="SvgjsG1831">
                          <g
                            id="SvgjsG1835"
                            class="apexcharts-series apexcharts-radial-series"
                            seriesName="Progress"
                            rel="1"
                            data:realIndex="0"
                          >
                            <path
                              id="SvgjsPath1836"
                              d="M 32.10365853658536 62.49999999999999 A 42.89634146341464 42.89634146341464 0 0 1 107.860504008183 34.92676320643412"
                              fill="none"
                              fill-opacity="0.85"
                              stroke="rgba(105,108,255,0.85)"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="8.719512195121954"
                              stroke-dasharray="0"
                              class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                              data:angle="140"
                              data:value="78"
                              index="0"
                              j="0"
                              data:pathOrig="M 32.10365853658536 62.49999999999999 A 42.89634146341464 42.89634146341464 0 0 1 107.860504008183 34.92676320643412"
                            ></path>
                          </g>
                          <circle
                            id="SvgjsCircle1832"
                            r="33.66737804878049"
                            cx="75"
                            cy="62.5"
                            class="apexcharts-radialbar-hollow"
                            fill="transparent"
                          ></circle>
                          <g
                            id="SvgjsG1833"
                            class="apexcharts-datalabels-group"
                            transform="translate(0, 0) scale(1)"
                            style="opacity: 1"
                          >
                            <text
                              id="SvgjsText1834"
                              font-family="Public Sans"
                              x="75"
                              y="57.5"
                              text-anchor="middle"
                              dominant-baseline="auto"
                              font-size="18px"
                              font-weight="500"
                              fill="#384551"
                              class="apexcharts-text apexcharts-datalabel-value"
                              style="font-family: 'Public Sans'"
                            >
                              78%
                            </text>
                          </g>
                        </g>
                      </g>
                    </g>
                    <line
                      id="SvgjsLine1837"
                      x1="0"
                      y1="0"
                      x2="150"
                      y2="0"
                      stroke="#b6b6b6"
                      stroke-dasharray="0"
                      stroke-width="1"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs"
                    ></line>
                    <line
                      id="SvgjsLine1838"
                      x1="0"
                      y1="0"
                      x2="150"
                      y2="0"
                      stroke-dasharray="0"
                      stroke-width="0"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs-hidden"
                    ></line>
                  </g>
                  <g
                    id="SvgjsG1823"
                    class="apexcharts-annotations"
                  ></g>
                </svg>
                <div class="apexcharts-legend"></div>
              </div>
            </div>
            <div class="p-4 pt-2">
              <small class="d-block text-center"
                >₹21k Orders more than last month</small
              >
            </div>
            <div class="resize-triggers">
              <div class="expand-trigger">
                <div style="width: 211px; height: 199px"></div>
              </div>
              <div class="contract-trigger"></div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-md-3 col-6 mb-6">
          <div class="card h-100">
            <div class="card-body">
              <div
                class="card-title d-flex align-items-start justify-content-between mb-4"
              >
                <div class="avatar flex-shrink-0">
                  <img
                    src="./assets/cc-primary.png"
                    alt="Credit Card"
                    class="rounded"
                  />
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="cardOpt1"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i
                      class="bx bx-dots-vertical-rounded text-muted"
                    ></i>
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="cardOpt1"
                  >
                    <a
                      class="dropdown-item"
                      href="javascript:void(0);"
                      >View More</a
                    >
                    <a
                      class="dropdown-item"
                      href="javascript:void(0);"
                      >Delete</a
                    >
                  </div>
                </div>
              </div>
              <p class="mb-1">Products</p>
              <h4 class="card-title mb-3">14,857</h4>
              <small class="text-success fw-medium"
                ><i class="bx bx-up-arrow-alt"></i> +28.14%</small
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-xxl-12 mb-6 mb-lg-0">
      <div class="card">
        <div class="table-responsive text-nowrap">
         
          <table class="table table-sm text-nowrap table-border-top-0">
            <thead>
              <tr>
                <th>Product</th>
                <th>Category</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="./assets/logitech-mx.png"
                      alt="Curtain"
                      height="32"
                      width="32"
                      class="me-3"
                    />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">Curtain Rajasthani</h6> <!-- Product name -->
                      <small class="text-body">Home Decor</small> <!-- Sub-category -->
                    </div>
                  </div>
                </td>
                <td>
                  <span class="badge bg-label-primary rounded-pill p-1_5 me-3"
                    ><i class="bx bx-mobile-alt bx-xs"></i
                  ></span>
                  Home Textile <!-- Category -->
                </td>
                <td>
                  <div class="text-body">
                    <span class="text-primary fw-medium">₹1500</span> <!-- Price -->
                  </div>
                  <small class="text-body">In Stock</small> <!-- Stock status -->
                </td>
                <td>
                  <span class="badge bg-label-success">Confirmed</span> <!-- Status -->
                </td>
                <td>
                  <div class="dropdown">
                    <button
                      type="button"
                      class="btn p-0 dropdown-toggle hide-arrow"
                      data-bs-toggle="dropdown"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> View Details</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
          
              <!-- Second Product Row -->
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="./assets/logitech-mx.png"
                      alt="Lamp"
                      height="32"
                      width="32"
                      class="me-3"
                    />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">Vintage Lamp</h6> <!-- Product name -->
                      <small class="text-body">Lighting</small> <!-- Sub-category -->
                    </div>
                  </div>
                </td>
                <td>
                  <span class="badge bg-label-primary rounded-pill p-1_5 me-3"
                    ><i class="bx bx-mobile-alt bx-xs"></i
                  ></span>
                  Home Lighting <!-- Category -->
                </td>
                <td>
                  <div class="text-body">
                    <span class="text-primary fw-medium">₹2500</span> <!-- Price -->
                  </div>
                  <small class="text-body">Out of Stock</small> <!-- Stock status -->
                </td>
                <td>
                  <span class="badge bg-label-warning">Pending</span> <!-- Status -->
                </td>
                <td>
                  <div class="dropdown">
                    <button
                      type="button"
                      class="btn p-0 dropdown-toggle hide-arrow"
                      data-bs-toggle="dropdown"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> View Details</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    
   
   
  </div>
  @endsection