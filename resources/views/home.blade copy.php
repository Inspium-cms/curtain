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
                Congratulations Katie! 🎉
              </h5>
              <p class="card-subtitle text-nowrap mb-3">
                Best seller of the month
              </p>

              <h5 class="card-title text-primary mb-0">$48.9k</h5>
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
    <!-- New Visitors & Activity -->
    <div class="col-xxl-8 mb-6">
      <div class="card h-100">
        <div class="card-body row g-4 p-0">
          <div class="col-md-6 card-separator">
            <div class="p-6">
              <div
                class="card-title d-flex align-items-start justify-content-between"
              >
                <h5 class="mb-0">New Visitors</h5>
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

    <div class="col-lg-12 col-xxl-4">
      <div class="row">
        <div class="col-xxl-6 col-md-3 col-6 mb-6">
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
              <h4 class="card-title mb-3">$4,679</h4>
              <small class="text-success fw-medium"
                ><i class="bx bx-up-arrow-alt"></i> +28.42%</small
              >
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-md-3 col-6 mb-6">
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
        <div class="col-xxl-6 col-md-3 col-6 mb-6">
          <div class="card h-100">
            <div class="card-body pb-0">
              <span class="d-block fw-medium mb-1">Expenses</span>
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
                >$21k Expenses more than last month</small
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
        <div class="col-xxl-6 col-md-3 col-6 mb-6">
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
              <p class="mb-1">Transactions</p>
              <h4 class="card-title mb-3">$14,857</h4>
              <small class="text-success fw-medium"
                ><i class="bx bx-up-arrow-alt"></i> +28.14%</small
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Income -->
    <div class="col-md-12 col-xxl-8 mb-6">
      <div class="card h-100">
        <div class="row row-bordered g-0">
          <div class="col-md-8">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h5 class="card-title mb-1">Total Income</h5>
                <p class="card-subtitle">Yearly report overview</p>
              </div>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="totalIncome"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i
                    class="bx bx-dots-vertical-rounded bx-lg text-muted"
                  ></i>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="totalIncome"
                >
                  <a
                    class="dropdown-item"
                    href="javascript:void(0);"
                    >Last 28 Days</a
                  >
                  <a
                    class="dropdown-item"
                    href="javascript:void(0);"
                    >Last Month</a
                  >
                  <a
                    class="dropdown-item"
                    href="javascript:void(0);"
                    >Last Year</a
                  >
                </div>
              </div>
            </div>
            <div class="card-body" style="position: relative">
              <div id="totalIncomeChart" style="min-height: 305px">
                <div
                  id="apexchartsbg0k0m23l"
                  class="apexcharts-canvas apexchartsbg0k0m23l apexcharts-theme-light"
                  style="width: 563px; height: 290px"
                >
                  <svg
                    id="SvgjsSvg1840"
                    width="563"
                    height="290"
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
                      id="SvgjsG1842"
                      class="apexcharts-inner apexcharts-graphical"
                      transform="translate(39.6529541015625, 15)"
                    >
                      <defs id="SvgjsDefs1841">
                        <clippath id="gridRectMaskbg0k0m23l">
                          <rect
                            id="SvgjsRect1848"
                            width="517.5379638671875"
                            height="248.73"
                            x="-3.5"
                            y="-1.5"
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
                          id="forecastMaskbg0k0m23l"
                        ></clippath>
                        <clippath
                          id="nonForecastMaskbg0k0m23l"
                        ></clippath>
                        <clippath id="gridRectMarkerMaskbg0k0m23l">
                          <rect
                            id="SvgjsRect1849"
                            width="514.5379638671875"
                            height="249.73"
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
                          id="SvgjsLinearGradient1854"
                          x1="0"
                          y1="0"
                          x2="0"
                          y2="1"
                        >
                          <stop
                            id="SvgjsStop1855"
                            stop-opacity="0.7"
                            stop-color="rgba(105,108,255,0.7)"
                            offset="0"
                          ></stop>
                          <stop
                            id="SvgjsStop1856"
                            stop-opacity="0.25"
                            stop-color="rgba(225,226,255,0.25)"
                            offset="0.95"
                          ></stop>
                          <stop
                            id="SvgjsStop1857"
                            stop-opacity="0.25"
                            stop-color="rgba(225,226,255,0.25)"
                            offset="1"
                          ></stop>
                        </lineargradient>
                        <filter
                          id="SvgjsFilter1859"
                          filterUnits="userSpaceOnUse"
                          width="200%"
                          height="200%"
                          x="-50%"
                          y="-50%"
                        >
                          <feflood
                            id="SvgjsFeFlood1860"
                            flood-color="#696cff"
                            flood-opacity="0.15"
                            result="SvgjsFeFlood1860Out"
                            in="SourceGraphic"
                          ></feflood>
                          <fecomposite
                            id="SvgjsFeComposite1861"
                            in="SvgjsFeFlood1860Out"
                            in2="SourceAlpha"
                            operator="in"
                            result="SvgjsFeComposite1861Out"
                          ></fecomposite>
                          <feoffset
                            id="SvgjsFeOffset1862"
                            dx="2"
                            dy="14"
                            result="SvgjsFeOffset1862Out"
                            in="SvgjsFeComposite1861Out"
                          ></feoffset>
                          <fegaussianblur
                            id="SvgjsFeGaussianBlur1863"
                            stdDeviation="3 "
                            result="SvgjsFeGaussianBlur1863Out"
                            in="SvgjsFeOffset1862Out"
                          ></fegaussianblur>
                          <femerge
                            id="SvgjsFeMerge1864"
                            result="SvgjsFeMerge1864Out"
                            in="SourceGraphic"
                          >
                            <femergenode
                              id="SvgjsFeMergeNode1865"
                              in="SvgjsFeGaussianBlur1863Out"
                            ></femergenode>
                            <femergenode
                              id="SvgjsFeMergeNode1866"
                              in="[object Arguments]"
                            ></femergenode>
                          </femerge>
                          <feblend
                            id="SvgjsFeBlend1867"
                            in="SourceGraphic"
                            in2="SvgjsFeMerge1864Out"
                            mode="normal"
                            result="SvgjsFeBlend1867Out"
                          ></feblend>
                        </filter>
                        <filter
                          id="SvgjsFilter1869"
                          filterUnits="userSpaceOnUse"
                          width="200%"
                          height="200%"
                          x="-50%"
                          y="-50%"
                        >
                          <feflood
                            id="SvgjsFeFlood1870"
                            flood-color="#696cff"
                            flood-opacity="0.15"
                            result="SvgjsFeFlood1870Out"
                            in="SourceGraphic"
                          ></feflood>
                          <fecomposite
                            id="SvgjsFeComposite1871"
                            in="SvgjsFeFlood1870Out"
                            in2="SourceAlpha"
                            operator="in"
                            result="SvgjsFeComposite1871Out"
                          ></fecomposite>
                          <feoffset
                            id="SvgjsFeOffset1872"
                            dx="2"
                            dy="14"
                            result="SvgjsFeOffset1872Out"
                            in="SvgjsFeComposite1871Out"
                          ></feoffset>
                          <fegaussianblur
                            id="SvgjsFeGaussianBlur1873"
                            stdDeviation="3 "
                            result="SvgjsFeGaussianBlur1873Out"
                            in="SvgjsFeOffset1872Out"
                          ></fegaussianblur>
                          <femerge
                            id="SvgjsFeMerge1874"
                            result="SvgjsFeMerge1874Out"
                            in="SourceGraphic"
                          >
                            <femergenode
                              id="SvgjsFeMergeNode1875"
                              in="SvgjsFeGaussianBlur1873Out"
                            ></femergenode>
                            <femergenode
                              id="SvgjsFeMergeNode1876"
                              in="[object Arguments]"
                            ></femergenode>
                          </femerge>
                          <feblend
                            id="SvgjsFeBlend1877"
                            in="SourceGraphic"
                            in2="SvgjsFeMerge1874Out"
                            mode="normal"
                            result="SvgjsFeBlend1877Out"
                          ></feblend>
                        </filter>
                      </defs>
                      <line
                        id="SvgjsLine1847"
                        x1="0"
                        y1="0"
                        x2="0"
                        y2="245.73"
                        stroke="#b6b6b6"
                        stroke-dasharray="3"
                        stroke-linecap="butt"
                        class="apexcharts-xcrosshairs"
                        x="0"
                        y="0"
                        width="1"
                        height="245.73"
                        fill="#b1b9c4"
                        filter="none"
                        fill-opacity="0.9"
                        stroke-width="1"
                      ></line>
                      <g
                        id="SvgjsG1878"
                        class="apexcharts-xaxis"
                        transform="translate(0, 0)"
                      >
                        <g
                          id="SvgjsG1879"
                          class="apexcharts-xaxis-texts-g"
                          transform="translate(0, -4)"
                        >
                          <text
                            id="SvgjsText1881"
                            font-family="Public Sans"
                            x="0"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1882">Jan</tspan>
                            <title>Jan</title>
                          </text>
                          <text
                            id="SvgjsText1884"
                            font-family="Public Sans"
                            x="46.41254216974433"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1885">Feb</tspan>
                            <title>Feb</title>
                          </text>
                          <text
                            id="SvgjsText1887"
                            font-family="Public Sans"
                            x="92.82508433948865"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1888">Mar</tspan>
                            <title>Mar</title>
                          </text>
                          <text
                            id="SvgjsText1890"
                            font-family="Public Sans"
                            x="139.23762650923297"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1891">Apr</tspan>
                            <title>Apr</title>
                          </text>
                          <text
                            id="SvgjsText1893"
                            font-family="Public Sans"
                            x="185.65016867897728"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1894">May</tspan>
                            <title>May</title>
                          </text>
                          <text
                            id="SvgjsText1896"
                            font-family="Public Sans"
                            x="232.0627108487216"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1897">Jun</tspan>
                            <title>Jun</title>
                          </text>
                          <text
                            id="SvgjsText1899"
                            font-family="Public Sans"
                            x="278.4752530184659"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1900">Jul</tspan>
                            <title>Jul</title>
                          </text>
                          <text
                            id="SvgjsText1902"
                            font-family="Public Sans"
                            x="324.8877951882102"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1903">Aug</tspan>
                            <title>Aug</title>
                          </text>
                          <text
                            id="SvgjsText1905"
                            font-family="Public Sans"
                            x="371.3003373579545"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1906">Sep</tspan>
                            <title>Sep</title>
                          </text>
                          <text
                            id="SvgjsText1908"
                            font-family="Public Sans"
                            x="417.7128795276988"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1909">Oct</tspan>
                            <title>Oct</title>
                          </text>
                          <text
                            id="SvgjsText1911"
                            font-family="Public Sans"
                            x="464.12542169744313"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1912">Nov</tspan>
                            <title>Nov</title>
                          </text>
                          <text
                            id="SvgjsText1914"
                            font-family="Public Sans"
                            x="510.53796386718744"
                            y="274.73"
                            text-anchor="middle"
                            dominant-baseline="auto"
                            font-size="13px"
                            font-weight="400"
                            fill="#a7acb2"
                            class="apexcharts-text apexcharts-xaxis-label"
                            style="font-family: 'Public Sans'"
                          >
                            <tspan id="SvgjsTspan1915">Dec</tspan>
                            <title>Dec</title>
                          </text>
                        </g>
                      </g>
                      <g id="SvgjsG1930" class="apexcharts-grid">
                        <g
                          id="SvgjsG1931"
                          class="apexcharts-gridlines-horizontal"
                        >
                          <line
                            id="SvgjsLine1933"
                            x1="0"
                            y1="0"
                            x2="510.5379638671875"
                            y2="0"
                            stroke="#e4e6e8"
                            stroke-dasharray="10"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                          <line
                            id="SvgjsLine1934"
                            x1="0"
                            y1="49.146"
                            x2="510.5379638671875"
                            y2="49.146"
                            stroke="#e4e6e8"
                            stroke-dasharray="10"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                          <line
                            id="SvgjsLine1935"
                            x1="0"
                            y1="98.292"
                            x2="510.5379638671875"
                            y2="98.292"
                            stroke="#e4e6e8"
                            stroke-dasharray="10"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                          <line
                            id="SvgjsLine1936"
                            x1="0"
                            y1="147.438"
                            x2="510.5379638671875"
                            y2="147.438"
                            stroke="#e4e6e8"
                            stroke-dasharray="10"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                          <line
                            id="SvgjsLine1937"
                            x1="0"
                            y1="196.584"
                            x2="510.5379638671875"
                            y2="196.584"
                            stroke="#e4e6e8"
                            stroke-dasharray="10"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                          <line
                            id="SvgjsLine1938"
                            x1="0"
                            y1="245.73000000000002"
                            x2="510.5379638671875"
                            y2="245.73000000000002"
                            stroke="#e4e6e8"
                            stroke-dasharray="10"
                            stroke-linecap="butt"
                            class="apexcharts-gridline"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG1932"
                          class="apexcharts-gridlines-vertical"
                        ></g>
                        <line
                          id="SvgjsLine1940"
                          x1="0"
                          y1="245.73"
                          x2="510.5379638671875"
                          y2="245.73"
                          stroke="transparent"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                        ></line>
                        <line
                          id="SvgjsLine1939"
                          x1="0"
                          y1="1"
                          x2="0"
                          y2="245.73"
                          stroke="transparent"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                        ></line>
                      </g>
                      <g
                        id="SvgjsG1850"
                        class="apexcharts-area-series apexcharts-plot-series"
                      >
                        <g
                          id="SvgjsG1851"
                          class="apexcharts-series"
                          seriesName="seriesx1"
                          data:longestSeries="true"
                          rel="1"
                          data:realIndex="0"
                        >
                          <path
                            id="SvgjsPath1858"
                            d="M 0 245.73L 0 130.2369L 46.41254216974431 130.2369L 92.82508433948863 58.9752L 139.23762650923294 58.9752L 185.65016867897725 149.8953L 232.06271084872157 149.8953L 278.4752530184659 206.4132L 324.8877951882102 206.4132L 371.3003373579545 110.57849999999999L 417.7128795276988 110.57849999999999L 464.12542169744313 14.743800000000022L 510.53796386718744 14.743800000000022L 510.53796386718744 245.73M 510.53796386718744 14.743800000000022z"
                            fill="url(#SvgjsLinearGradient1854)"
                            fill-opacity="1"
                            stroke-opacity="1"
                            stroke-linecap="butt"
                            stroke-width="0"
                            stroke-dasharray="0"
                            class="apexcharts-area"
                            index="0"
                            clip-path="url(#gridRectMaskbg0k0m23l)"
                            filter="url(#SvgjsFilter1859)"
                            pathTo="M 0 245.73L 0 130.2369L 46.41254216974431 130.2369L 92.82508433948863 58.9752L 139.23762650923294 58.9752L 185.65016867897725 149.8953L 232.06271084872157 149.8953L 278.4752530184659 206.4132L 324.8877951882102 206.4132L 371.3003373579545 110.57849999999999L 417.7128795276988 110.57849999999999L 464.12542169744313 14.743800000000022L 510.53796386718744 14.743800000000022L 510.53796386718744 245.73M 510.53796386718744 14.743800000000022z"
                            pathFrom="M -1 294.876L -1 294.876L 46.41254216974431 294.876L 92.82508433948863 294.876L 139.23762650923294 294.876L 185.65016867897725 294.876L 232.06271084872157 294.876L 278.4752530184659 294.876L 324.8877951882102 294.876L 371.3003373579545 294.876L 417.7128795276988 294.876L 464.12542169744313 294.876L 510.53796386718744 294.876"
                          ></path>
                          <path
                            id="SvgjsPath1868"
                            d="M 0 130.2369L 46.41254216974431 130.2369L 92.82508433948863 58.9752L 139.23762650923294 58.9752L 185.65016867897725 149.8953L 232.06271084872157 149.8953L 278.4752530184659 206.4132L 324.8877951882102 206.4132L 371.3003373579545 110.57849999999999L 417.7128795276988 110.57849999999999L 464.12542169744313 14.743800000000022L 510.53796386718744 14.743800000000022"
                            fill="none"
                            fill-opacity="1"
                            stroke="#696cff"
                            stroke-opacity="1"
                            stroke-linecap="butt"
                            stroke-width="3"
                            stroke-dasharray="0"
                            class="apexcharts-area"
                            index="0"
                            clip-path="url(#gridRectMaskbg0k0m23l)"
                            filter="url(#SvgjsFilter1869)"
                            pathTo="M 0 130.2369L 46.41254216974431 130.2369L 92.82508433948863 58.9752L 139.23762650923294 58.9752L 185.65016867897725 149.8953L 232.06271084872157 149.8953L 278.4752530184659 206.4132L 324.8877951882102 206.4132L 371.3003373579545 110.57849999999999L 417.7128795276988 110.57849999999999L 464.12542169744313 14.743800000000022L 510.53796386718744 14.743800000000022"
                            pathFrom="M -1 294.876L -1 294.876L 46.41254216974431 294.876L 92.82508433948863 294.876L 139.23762650923294 294.876L 185.65016867897725 294.876L 232.06271084872157 294.876L 278.4752530184659 294.876L 324.8877951882102 294.876L 371.3003373579545 294.876L 417.7128795276988 294.876L 464.12542169744313 294.876L 510.53796386718744 294.876"
                          ></path>
                          <g
                            id="SvgjsG1852"
                            class="apexcharts-series-markers-wrap"
                            data:realIndex="0"
                          >
                            <g class="apexcharts-series-markers">
                              <circle
                                id="SvgjsCircle1946"
                                r="0"
                                cx="0"
                                cy="0"
                                class="apexcharts-marker wky0qm0b6 no-pointer-events"
                                stroke="#ffffff"
                                fill="#696cff"
                                fill-opacity="1"
                                stroke-width="2"
                                stroke-opacity="0.9"
                                default-marker-size="0"
                              ></circle>
                            </g>
                          </g>
                        </g>
                        <g
                          id="SvgjsG1853"
                          class="apexcharts-datalabels"
                          data:realIndex="0"
                        ></g>
                      </g>
                      <line
                        id="SvgjsLine1941"
                        x1="0"
                        y1="0"
                        x2="510.5379638671875"
                        y2="0"
                        stroke="#b6b6b6"
                        stroke-dasharray="0"
                        stroke-width="1"
                        stroke-linecap="butt"
                        class="apexcharts-ycrosshairs"
                      ></line>
                      <line
                        id="SvgjsLine1942"
                        x1="0"
                        y1="0"
                        x2="510.5379638671875"
                        y2="0"
                        stroke-dasharray="0"
                        stroke-width="0"
                        stroke-linecap="butt"
                        class="apexcharts-ycrosshairs-hidden"
                      ></line>
                      <g
                        id="SvgjsG1943"
                        class="apexcharts-yaxis-annotations"
                      ></g>
                      <g
                        id="SvgjsG1944"
                        class="apexcharts-xaxis-annotations"
                      ></g>
                      <g
                        id="SvgjsG1945"
                        class="apexcharts-point-annotations"
                      ></g>
                      <rect
                        id="SvgjsRect1947"
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
                        id="SvgjsRect1948"
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
                      id="SvgjsRect1846"
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
                      id="SvgjsG1916"
                      class="apexcharts-yaxis"
                      rel="0"
                      transform="translate(6.6529541015625, 0)"
                    >
                      <g
                        id="SvgjsG1917"
                        class="apexcharts-yaxis-texts-g"
                      >
                        <text
                          id="SvgjsText1918"
                          font-family="Public Sans"
                          x="20"
                          y="16.5"
                          text-anchor="end"
                          dominant-baseline="auto"
                          font-size="13px"
                          font-weight="400"
                          fill="#a7acb2"
                          class="apexcharts-text apexcharts-yaxis-label"
                          style="font-family: 'Public Sans'"
                        >
                          <tspan id="SvgjsTspan1919">$6k</tspan>
                          <title>$6k</title>
                        </text>
                        <text
                          id="SvgjsText1920"
                          font-family="Public Sans"
                          x="20"
                          y="65.646"
                          text-anchor="end"
                          dominant-baseline="auto"
                          font-size="13px"
                          font-weight="400"
                          fill="#a7acb2"
                          class="apexcharts-text apexcharts-yaxis-label"
                          style="font-family: 'Public Sans'"
                        >
                          <tspan id="SvgjsTspan1921">$5k</tspan>
                          <title>$5k</title>
                        </text>
                        <text
                          id="SvgjsText1922"
                          font-family="Public Sans"
                          x="20"
                          y="114.792"
                          text-anchor="end"
                          dominant-baseline="auto"
                          font-size="13px"
                          font-weight="400"
                          fill="#a7acb2"
                          class="apexcharts-text apexcharts-yaxis-label"
                          style="font-family: 'Public Sans'"
                        >
                          <tspan id="SvgjsTspan1923">$4k</tspan>
                          <title>$4k</title>
                        </text>
                        <text
                          id="SvgjsText1924"
                          font-family="Public Sans"
                          x="20"
                          y="163.938"
                          text-anchor="end"
                          dominant-baseline="auto"
                          font-size="13px"
                          font-weight="400"
                          fill="#a7acb2"
                          class="apexcharts-text apexcharts-yaxis-label"
                          style="font-family: 'Public Sans'"
                        >
                          <tspan id="SvgjsTspan1925">$3k</tspan>
                          <title>$3k</title>
                        </text>
                        <text
                          id="SvgjsText1926"
                          font-family="Public Sans"
                          x="20"
                          y="213.084"
                          text-anchor="end"
                          dominant-baseline="auto"
                          font-size="13px"
                          font-weight="400"
                          fill="#a7acb2"
                          class="apexcharts-text apexcharts-yaxis-label"
                          style="font-family: 'Public Sans'"
                        >
                          <tspan id="SvgjsTspan1927">$2k</tspan>
                          <title>$2k</title>
                        </text>
                        <text
                          id="SvgjsText1928"
                          font-family="Public Sans"
                          x="20"
                          y="262.23"
                          text-anchor="end"
                          dominant-baseline="auto"
                          font-size="13px"
                          font-weight="400"
                          fill="#a7acb2"
                          class="apexcharts-text apexcharts-yaxis-label"
                          style="font-family: 'Public Sans'"
                        >
                          <tspan id="SvgjsTspan1929">$1k</tspan>
                          <title>$1k</title>
                        </text>
                      </g>
                    </g>
                    <g
                      id="SvgjsG1843"
                      class="apexcharts-annotations"
                    ></g>
                  </svg>
                  <div
                    class="apexcharts-legend"
                    style="max-height: 145px"
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
                        style="background-color: rgb(105, 108, 255)"
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
                    <div class="apexcharts-yaxistooltip-text"></div>
                  </div>
                </div>
              </div>
              <div class="resize-triggers">
                <div class="expand-trigger">
                  <div style="width: 612px; height: 330px"></div>
                </div>
                <div class="contract-trigger"></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h5 class="card-title mb-1">Report</h5>
                <p class="card-subtitle">Monthly Avg. $45.578k</p>
              </div>
              <div class="dropdown">
                <button
                  class="btn p-0"
                  type="button"
                  id="totalReport"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i
                    class="bx bx-dots-vertical-rounded bx-lg text-muted"
                  ></i>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="totalReport"
                >
                  <a
                    class="dropdown-item"
                    href="javascript:void(0);"
                    >Last 28 Days</a
                  >
                  <a
                    class="dropdown-item"
                    href="javascript:void(0);"
                    >Last Month</a
                  >
                  <a
                    class="dropdown-item"
                    href="javascript:void(0);"
                    >Last Year</a
                  >
                </div>
              </div>
            </div>
            <div class="card-body pt-lg-6">
              <div class="report-list">
                <div class="report-list-item rounded-2 mb-4">
                  <div class="d-flex align-items-center">
                    <div class="report-list-icon shadow-xs me-4">
                      <img
                        src="./assets/paypal-icon.svg"
                        width="22"
                        height="22"
                        alt="Paypal"
                      />
                    </div>
                    <div
                      class="d-flex justify-content-between align-items-center w-100 flex-wrap gap-2"
                    >
                      <div class="d-flex flex-column">
                        <span>Income</span>
                        <h5 class="mb-0">$42,845</h5>
                      </div>
                      <small class="text-success">+2.34k</small>
                    </div>
                  </div>
                </div>
                <div class="report-list-item rounded-2 mb-4">
                  <div class="d-flex align-items-center">
                    <div class="report-list-icon shadow-xs me-4">
                      <img
                        src="./assets/credit-card-icon.svg"
                        width="22"
                        height="22"
                        alt="Shopping Bag"
                      />
                    </div>
                    <div
                      class="d-flex justify-content-between align-items-center w-100 flex-wrap gap-2"
                    >
                      <div class="d-flex flex-column">
                        <span>Expense</span>
                        <h5 class="mb-0">$38,658</h5>
                      </div>
                      <small class="text-danger">-1.15k</small>
                    </div>
                  </div>
                </div>
                <div class="report-list-item rounded-2">
                  <div class="d-flex align-items-center">
                    <div class="report-list-icon shadow-xs me-4">
                      <img
                        src="./assets/wallet-icon.svg"
                        width="22"
                        height="22"
                        alt="Wallet"
                      />
                    </div>
                    <div
                      class="d-flex justify-content-between align-items-center w-100 flex-wrap gap-2"
                    >
                      <div class="d-flex flex-column">
                        <span>Profit</span>
                        <h5 class="mb-0">$18,220</h5>
                      </div>
                      <small class="text-success">+1.35k</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Total Income -->
    </div>
    <!--/ Total Income -->
  </div>
  <div class="row">
    <!-- Performance -->
    <div class="col-md-6 col-xxl-4 mb-6">
      <div class="card h-100">
        <div
          class="card-header d-flex align-items-center justify-content-between"
        >
          <h5 class="card-title m-0 me-2">Performance</h5>
          <div class="dropdown">
            <button
              class="btn p-0"
              type="button"
              id="performanceId"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i
                class="bx bx-dots-vertical-rounded bx-lg text-muted"
              ></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="performanceId"
            >
              <a class="dropdown-item" href="javascript:void(0);"
                >Last 28 Days</a
              >
              <a class="dropdown-item" href="javascript:void(0);"
                >Last Month</a
              >
              <a class="dropdown-item" href="javascript:void(0);"
                >Last Year</a
              >
            </div>
          </div>
        </div>
        <div class="card-body" style="position: relative">
          <div class="row justify-content-between mb-5">
            <div class="col-6">
              <p class="mb-0">Earnings: $846.17</p>
            </div>
            <div class="col-6">
              <p class="mb-0 text-end">Sales: 25.7M</p>
            </div>
          </div>
          <div id="performanceChart" style="min-height: 325px">
            <div
              id="apexchartsyogidvr4"
              class="apexcharts-canvas apexchartsyogidvr4 apexcharts-theme-light"
              style="width: 397px; height: 310px"
            >
              <svg
                id="SvgjsSvg1951"
                width="397"
                height="310"
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.dev"
                class="apexcharts-svg"
                xmlns:data="ApexChartsNS"
                transform="translate(0, 0)"
                style="background: transparent"
              >
                <foreignobject x="0" y="0" width="397" height="310">
                  <div
                    class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                    xmlns="http://www.w3.org/1999/xhtml"
                    style="
                      inset: auto 0px 1px;
                      position: absolute;
                      max-height: 155px;
                    "
                  >
                    <div
                      class="apexcharts-legend-series"
                      rel="1"
                      seriesname="Income"
                      data:collapsed="false"
                      style="margin: 2px 10px"
                    >
                      <span
                        class="apexcharts-legend-marker"
                        rel="1"
                        data:collapsed="false"
                        style="
                          background: rgb(105, 108, 255) !important;
                          color: rgb(105, 108, 255);
                          height: 10px;
                          width: 10px;
                          left: -5px;
                          top: 0px;
                          border-width: 0px;
                          border-color: rgb(255, 255, 255);
                          border-radius: 12px;
                        "
                      ></span>
                      <span
                        class="apexcharts-legend-text"
                        rel="1"
                        i="0"
                        data:default-text="Income"
                        data:collapsed="false"
                        style="
                          color: rgb(170, 179, 191);
                          font-size: 13px;
                          font-weight: 400;
                          font-family: Helvetica, Arial, sans-serif;
                        "
                      >
                        Income
                      </span>
                    </div>
                    <div
                      class="apexcharts-legend-series"
                      rel="2"
                      seriesname="Earning"
                      data:collapsed="false"
                      style="margin: 2px 10px"
                    >
                      <span
                        class="apexcharts-legend-marker"
                        rel="2"
                        data:collapsed="false"
                        style="
                          background: rgb(3, 195, 236) !important;
                          color: rgb(3, 195, 236);
                          height: 10px;
                          width: 10px;
                          left: -5px;
                          top: 0px;
                          border-width: 0px;
                          border-color: rgb(255, 255, 255);
                          border-radius: 12px;
                        "
                      ></span>
                      <span
                        class="apexcharts-legend-text"
                        rel="2"
                        i="1"
                        data:default-text="Earning"
                        data:collapsed="false"
                        style="
                          color: rgb(170, 179, 191);
                          font-size: 13px;
                          font-weight: 400;
                          font-family: Helvetica, Arial, sans-serif;
                        "
                      >
                        Earning
                      </span>
                    </div>
                  </div>
                  <style type="text/css">
                    .apexcharts-legend {
                      display: flex;
                      overflow: auto;
                      padding: 0 10px;
                    }
                    .apexcharts-legend.apx-legend-position-bottom,
                    .apexcharts-legend.apx-legend-position-top {
                      flex-wrap: wrap;
                    }
                    .apexcharts-legend.apx-legend-position-right,
                    .apexcharts-legend.apx-legend-position-left {
                      flex-direction: column;
                      bottom: 0;
                    }
                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                    .apexcharts-legend.apx-legend-position-right,
                    .apexcharts-legend.apx-legend-position-left {
                      justify-content: flex-start;
                    }
                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                      justify-content: center;
                    }
                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                      justify-content: flex-end;
                    }
                    .apexcharts-legend-series {
                      cursor: pointer;
                      line-height: normal;
                    }
                    .apexcharts-legend.apx-legend-position-bottom
                      .apexcharts-legend-series,
                    .apexcharts-legend.apx-legend-position-top
                      .apexcharts-legend-series {
                      display: flex;
                      align-items: center;
                    }
                    .apexcharts-legend-text {
                      position: relative;
                      font-size: 14px;
                    }
                    .apexcharts-legend-text *,
                    .apexcharts-legend-marker * {
                      pointer-events: none;
                    }
                    .apexcharts-legend-marker {
                      position: relative;
                      display: inline-block;
                      cursor: pointer;
                      margin-right: 3px;
                      border-style: solid;
                    }

                    .apexcharts-legend.apexcharts-align-right
                      .apexcharts-legend-series,
                    .apexcharts-legend.apexcharts-align-left
                      .apexcharts-legend-series {
                      display: inline-block;
                    }
                    .apexcharts-legend-series.apexcharts-no-click {
                      cursor: auto;
                    }
                    .apexcharts-legend
                      .apexcharts-hidden-zero-series,
                    .apexcharts-legend
                      .apexcharts-hidden-null-series {
                      display: none !important;
                    }
                    .apexcharts-inactive-legend {
                      opacity: 0.45;
                    }
                  </style>
                </foreignobject>
                <g
                  id="SvgjsG1953"
                  class="apexcharts-inner apexcharts-graphical"
                  transform="translate(12, 22)"
                >
                  <defs id="SvgjsDefs1952">
                    <clippath id="gridRectMaskyogidvr4">
                      <rect
                        id="SvgjsRect1956"
                        width="367.515625"
                        height="234"
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
                    <clippath id="forecastMaskyogidvr4"></clippath>
                    <clippath
                      id="nonForecastMaskyogidvr4"
                    ></clippath>
                    <clippath id="gridRectMarkerMaskyogidvr4">
                      <rect
                        id="SvgjsRect1957"
                        width="367.515625"
                        height="238"
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
                    <filter
                      id="SvgjsFilter1965"
                      width="200%"
                      height="200%"
                      x="-50%"
                      y="-50%"
                    >
                      <feflood
                        id="SvgjsFeFlood1966"
                        flood-color="#000000"
                        flood-opacity="0.14"
                        result="SvgjsFeFlood1966Out"
                        in="SourceGraphic"
                      ></feflood>
                      <fecomposite
                        id="SvgjsFeComposite1967"
                        in="SvgjsFeFlood1966Out"
                        in2="SourceAlpha"
                        operator="in"
                        result="SvgjsFeComposite1967Out"
                      ></fecomposite>
                      <feoffset
                        id="SvgjsFeOffset1968"
                        dx="0"
                        dy="6"
                        result="SvgjsFeOffset1968Out"
                        in="SvgjsFeComposite1967Out"
                      ></feoffset>
                      <fegaussianblur
                        id="SvgjsFeGaussianBlur1969"
                        stdDeviation="6 "
                        result="SvgjsFeGaussianBlur1969Out"
                        in="SvgjsFeOffset1968Out"
                      ></fegaussianblur>
                      <femerge
                        id="SvgjsFeMerge1970"
                        result="SvgjsFeMerge1970Out"
                        in="SourceGraphic"
                      >
                        <femergenode
                          id="SvgjsFeMergeNode1971"
                          in="SvgjsFeGaussianBlur1969Out"
                        ></femergenode>
                        <femergenode
                          id="SvgjsFeMergeNode1972"
                          in="[object Arguments]"
                        ></femergenode>
                      </femerge>
                      <feblend
                        id="SvgjsFeBlend1973"
                        in="SourceGraphic"
                        in2="SvgjsFeMerge1970Out"
                        mode="normal"
                        result="SvgjsFeBlend1973Out"
                      ></feblend>
                    </filter>
                    <filter
                      id="SvgjsFilter1991"
                      width="200%"
                      height="200%"
                      x="-50%"
                      y="-50%"
                    >
                      <feflood
                        id="SvgjsFeFlood1992"
                        flood-color="#000000"
                        flood-opacity="0.14"
                        result="SvgjsFeFlood1992Out"
                        in="SourceGraphic"
                      ></feflood>
                      <fecomposite
                        id="SvgjsFeComposite1993"
                        in="SvgjsFeFlood1992Out"
                        in2="SourceAlpha"
                        operator="in"
                        result="SvgjsFeComposite1993Out"
                      ></fecomposite>
                      <feoffset
                        id="SvgjsFeOffset1994"
                        dx="0"
                        dy="6"
                        result="SvgjsFeOffset1994Out"
                        in="SvgjsFeComposite1993Out"
                      ></feoffset>
                      <fegaussianblur
                        id="SvgjsFeGaussianBlur1995"
                        stdDeviation="6 "
                        result="SvgjsFeGaussianBlur1995Out"
                        in="SvgjsFeOffset1994Out"
                      ></fegaussianblur>
                      <femerge
                        id="SvgjsFeMerge1996"
                        result="SvgjsFeMerge1996Out"
                        in="SourceGraphic"
                      >
                        <femergenode
                          id="SvgjsFeMergeNode1997"
                          in="SvgjsFeGaussianBlur1995Out"
                        ></femergenode>
                        <femergenode
                          id="SvgjsFeMergeNode1998"
                          in="[object Arguments]"
                        ></femergenode>
                      </femerge>
                      <feblend
                        id="SvgjsFeBlend1999"
                        in="SourceGraphic"
                        in2="SvgjsFeMerge1996Out"
                        mode="normal"
                        result="SvgjsFeBlend1999Out"
                      ></feblend>
                    </filter>
                  </defs>
                  <g id="SvgjsG2030" class="apexcharts-grid">
                    <g
                      id="SvgjsG2031"
                      class="apexcharts-gridlines-horizontal"
                      style="display: none"
                    >
                      <line
                        id="SvgjsLine2033"
                        x1="0"
                        y1="0"
                        x2="363.515625"
                        y2="0"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine2034"
                        x1="0"
                        y1="58.5"
                        x2="363.515625"
                        y2="58.5"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine2035"
                        x1="0"
                        y1="117"
                        x2="363.515625"
                        y2="117"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine2036"
                        x1="0"
                        y1="175.5"
                        x2="363.515625"
                        y2="175.5"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine2037"
                        x1="0"
                        y1="234"
                        x2="363.515625"
                        y2="234"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                    </g>
                    <g
                      id="SvgjsG2032"
                      class="apexcharts-gridlines-vertical"
                      style="display: none"
                    ></g>
                    <line
                      id="SvgjsLine2039"
                      x1="0"
                      y1="234"
                      x2="363.515625"
                      y2="234"
                      stroke="transparent"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                    <line
                      id="SvgjsLine2038"
                      x1="0"
                      y1="1"
                      x2="0"
                      y2="234"
                      stroke="transparent"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                  </g>
                  <g
                    id="SvgjsG1958"
                    class="apexcharts-radar-series apexcharts-plot-series"
                    transform="translate(181.7578125, 117)"
                  >
                    <polygon
                      id="SvgjsPolygon2018"
                      points="0,-118.44642857142856 102.57761613039608,-59.22321428571429 102.5776161303961,59.22321428571425 1.4505503962043558e-14,118.44642857142856 -102.57761613039605,59.22321428571433 -102.57761613039614,-59.2232142857142 "
                      fill="none"
                      stroke="#e4e6e8"
                      stroke-width="1"
                    ></polygon>
                    <polygon
                      id="SvgjsPolygon2019"
                      points="0,-88.83482142857142 76.93321209779705,-44.417410714285715 76.93321209779707,44.41741071428569 1.087912797153267e-14,88.83482142857142 -76.93321209779704,44.41741071428575 -76.9332120977971,-44.41741071428565 "
                      fill="none"
                      stroke="#e4e6e8"
                      stroke-width="1"
                    ></polygon>
                    <polygon
                      id="SvgjsPolygon2020"
                      points="0,-59.22321428571428 51.28880806519804,-29.611607142857146 51.28880806519805,29.611607142857125 7.252751981021779e-15,59.22321428571428 -51.288808065198026,29.611607142857164 -51.28880806519807,-29.6116071428571 "
                      fill="none"
                      stroke="#e4e6e8"
                      stroke-width="1"
                    ></polygon>
                    <polygon
                      id="SvgjsPolygon2021"
                      points="0,-29.61160714285714 25.64440403259902,-14.805803571428573 25.644404032599024,14.805803571428562 3.6263759905108895e-15,29.61160714285714 -25.644404032599013,14.805803571428582 -25.644404032599034,-14.80580357142855 "
                      fill="none"
                      stroke="#e4e6e8"
                      stroke-width="1"
                    ></polygon>
                    <polygon
                      id="SvgjsPolygon2022"
                      points="0,0 0,0 0,0 0,0 0,0 0,0 "
                      fill="none"
                      stroke="#e4e6e8"
                      stroke-width="1"
                    ></polygon>
                    <line
                      id="SvgjsLine2012"
                      x1="0"
                      y1="-118.44642857142856"
                      x2="0"
                      y2="0"
                      stroke="#e4e6e8"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                    <line
                      id="SvgjsLine2013"
                      x1="102.57761613039608"
                      y1="-59.22321428571429"
                      x2="0"
                      y2="0"
                      stroke="#e4e6e8"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                    <line
                      id="SvgjsLine2014"
                      x1="102.5776161303961"
                      y1="59.22321428571425"
                      x2="0"
                      y2="0"
                      stroke="#e4e6e8"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                    <line
                      id="SvgjsLine2015"
                      x1="1.4505503962043558e-14"
                      y1="118.44642857142856"
                      x2="0"
                      y2="0"
                      stroke="#e4e6e8"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                    <line
                      id="SvgjsLine2016"
                      x1="-102.57761613039605"
                      y1="59.22321428571433"
                      x2="0"
                      y2="0"
                      stroke="#e4e6e8"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                    <line
                      id="SvgjsLine2017"
                      x1="-102.57761613039614"
                      y1="-59.2232142857142"
                      x2="0"
                      y2="0"
                      stroke="#e4e6e8"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                    <g id="SvgjsG2023" class="apexcharts-xaxis">
                      <text
                        id="SvgjsText2024"
                        font-family="Public Sans"
                        x="0"
                        y="-128.44642857142856"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-datalabel"
                        cx="0"
                        cy="-128.44642857142856"
                        style="font-family: 'Public Sans'"
                      >
                        Jan
                      </text>
                      <text
                        id="SvgjsText2025"
                        font-family="Public Sans"
                        x="112.57761613039608"
                        y="-59.22321428571429"
                        text-anchor="start"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-datalabel"
                        cx="112.57761613039608"
                        cy="-59.22321428571429"
                        style="font-family: 'Public Sans'"
                      >
                        Feb
                      </text>
                      <text
                        id="SvgjsText2026"
                        font-family="Public Sans"
                        x="112.5776161303961"
                        y="59.22321428571425"
                        text-anchor="start"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-datalabel"
                        cx="112.5776161303961"
                        cy="59.22321428571425"
                        style="font-family: 'Public Sans'"
                      >
                        Mar
                      </text>
                      <text
                        id="SvgjsText2027"
                        font-family="Public Sans"
                        x="1.4505503962043558e-14"
                        y="128.44642857142856"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-datalabel"
                        cx="1.4505503962043558e-14"
                        cy="128.44642857142856"
                        style="font-family: 'Public Sans'"
                      >
                        Apr
                      </text>
                      <text
                        id="SvgjsText2028"
                        font-family="Public Sans"
                        x="-112.57761613039605"
                        y="59.22321428571433"
                        text-anchor="end"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-datalabel"
                        cx="-112.57761613039605"
                        cy="59.22321428571433"
                        style="font-family: 'Public Sans'"
                      >
                        May
                      </text>
                      <text
                        id="SvgjsText2029"
                        font-family="Public Sans"
                        x="-112.57761613039614"
                        y="-59.2232142857142"
                        text-anchor="end"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-datalabel"
                        cx="-112.57761613039614"
                        cy="-59.2232142857142"
                        style="font-family: 'Public Sans'"
                      >
                        Jun
                      </text>
                    </g>
                    <g
                      id="SvgjsG1960"
                      class="apexcharts-series"
                      data:longestSeries="true"
                      seriesName="Income"
                      rel="1"
                      data:realIndex="0"
                    >
                      <path
                        id="SvgjsPath1963"
                        d="M 0 -76.99017857142856L 0 -76.99017857142856L 74.36877169453716 -42.93683035714286L 79.49765250105698 45.89799107142854L 1.4505503962043558e-14 118.44642857142856L -74.36877169453714 42.93683035714289L -61.54656967823768 -35.53392857142852Z"
                        fill="none"
                        fill-opacity="1"
                        stroke-opacity="1"
                        stroke-linecap="butt"
                        stroke-width="0"
                        stroke-dasharray="0"
                        class="apexcharts-radar"
                        index="0"
                        pathTo="M 0 -76.99017857142856L 0 -76.99017857142856L 74.36877169453716 -42.93683035714286L 79.49765250105698 45.89799107142854L 1.4505503962043558e-14 118.44642857142856L -74.36877169453714 42.93683035714289L -61.54656967823768 -35.53392857142852Z"
                        pathFrom="M 0 0"
                      ></path>
                      <path
                        id="SvgjsPath1964"
                        d="M 0 -76.99017857142856L 0 -76.99017857142856L 74.36877169453716 -42.93683035714286L 79.49765250105698 45.89799107142854L 1.4505503962043558e-14 118.44642857142856L -74.36877169453714 42.93683035714289L -61.54656967823768 -35.53392857142852Z"
                        fill="rgba(105,108,255,1)"
                        fill-opacity="1"
                        stroke-opacity="1"
                        stroke-linecap="butt"
                        stroke-width="0"
                        stroke-dasharray="0"
                        class="apexcharts-radar"
                        index="0"
                        pathTo="M 0 -76.99017857142856L 0 -76.99017857142856L 74.36877169453716 -42.93683035714286L 79.49765250105698 45.89799107142854L 1.4505503962043558e-14 118.44642857142856L -74.36877169453714 42.93683035714289L -61.54656967823768 -35.53392857142852Z"
                        pathFrom="M 0 0"
                        filter="url(#SvgjsFilter1965)"
                      ></path>
                      <g
                        id="SvgjsG1961"
                        class="apexcharts-series-markers-wrap"
                      >
                        <g
                          id="SvgjsG1975"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle1974"
                            r="0"
                            cx="0"
                            cy="-76.99017857142856"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#696cff"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="0"
                            j="0"
                            index="0"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG1977"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle1976"
                            r="0"
                            cx="74.36877169453716"
                            cy="-42.93683035714286"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#696cff"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="1"
                            j="1"
                            index="0"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG1979"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle1978"
                            r="0"
                            cx="79.49765250105698"
                            cy="45.89799107142854"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#696cff"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="2"
                            j="2"
                            index="0"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG1981"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle1980"
                            r="0"
                            cx="1.4505503962043558e-14"
                            cy="118.44642857142856"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#696cff"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="3"
                            j="3"
                            index="0"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG1983"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle1982"
                            r="0"
                            cx="-74.36877169453714"
                            cy="42.93683035714289"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#696cff"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="4"
                            j="4"
                            index="0"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG1985"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle1984"
                            r="0"
                            cx="-61.54656967823768"
                            cy="-35.53392857142852"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#696cff"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="5"
                            j="5"
                            index="0"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g class="apexcharts-series-markers">
                          <circle
                            id="SvgjsCircle2045"
                            r="0"
                            cx="0"
                            cy="0"
                            class="apexcharts-marker wce2ts24fj"
                            stroke="#ffffff"
                            fill="#696cff"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            default-marker-size="0"
                          ></circle>
                        </g>
                      </g>
                    </g>
                    <g
                      id="SvgjsG1986"
                      class="apexcharts-series"
                      data:longestSeries="true"
                      seriesName="Earning"
                      rel="2"
                      data:realIndex="1"
                    >
                      <path
                        id="SvgjsPath1989"
                        d="M 0 -88.83482142857142L 0 -88.83482142857142L 66.67545048475745 -38.495089285714286L 61.54656967823766 35.533928571428554L 9.428577575328313e-15 76.99017857142856L -61.54656967823763 35.533928571428596L -102.57761613039614 -59.2232142857142Z"
                        fill="none"
                        fill-opacity="1"
                        stroke-opacity="1"
                        stroke-linecap="butt"
                        stroke-width="0"
                        stroke-dasharray="0"
                        class="apexcharts-radar"
                        index="1"
                        pathTo="M 0 -88.83482142857142L 0 -88.83482142857142L 66.67545048475745 -38.495089285714286L 61.54656967823766 35.533928571428554L 9.428577575328313e-15 76.99017857142856L -61.54656967823763 35.533928571428596L -102.57761613039614 -59.2232142857142Z"
                        pathFrom="M 0 0"
                      ></path>
                      <path
                        id="SvgjsPath1990"
                        d="M 0 -88.83482142857142L 0 -88.83482142857142L 66.67545048475745 -38.495089285714286L 61.54656967823766 35.533928571428554L 9.428577575328313e-15 76.99017857142856L -61.54656967823763 35.533928571428596L -102.57761613039614 -59.2232142857142Z"
                        fill="rgba(3,195,236,0.85)"
                        fill-opacity="1"
                        stroke-opacity="1"
                        stroke-linecap="butt"
                        stroke-width="0"
                        stroke-dasharray="0"
                        class="apexcharts-radar"
                        index="1"
                        pathTo="M 0 -88.83482142857142L 0 -88.83482142857142L 66.67545048475745 -38.495089285714286L 61.54656967823766 35.533928571428554L 9.428577575328313e-15 76.99017857142856L -61.54656967823763 35.533928571428596L -102.57761613039614 -59.2232142857142Z"
                        pathFrom="M 0 0"
                        filter="url(#SvgjsFilter1991)"
                      ></path>
                      <g
                        id="SvgjsG1987"
                        class="apexcharts-series-markers-wrap"
                      >
                        <g
                          id="SvgjsG2001"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle2000"
                            r="0"
                            cx="0"
                            cy="-88.83482142857142"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#03c3ec"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="0"
                            j="0"
                            index="1"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG2003"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle2002"
                            r="0"
                            cx="66.67545048475745"
                            cy="-38.495089285714286"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#03c3ec"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="1"
                            j="1"
                            index="1"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG2005"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle2004"
                            r="0"
                            cx="61.54656967823766"
                            cy="35.533928571428554"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#03c3ec"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="2"
                            j="2"
                            index="1"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG2007"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle2006"
                            r="0"
                            cx="9.428577575328313e-15"
                            cy="76.99017857142856"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#03c3ec"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="3"
                            j="3"
                            index="1"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG2009"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle2008"
                            r="0"
                            cx="-61.54656967823763"
                            cy="35.533928571428596"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#03c3ec"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="4"
                            j="4"
                            index="1"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG2011"
                          class="apexcharts-series-markers"
                        >
                          <circle
                            id="SvgjsCircle2010"
                            r="0"
                            cx="-102.57761613039614"
                            cy="-59.2232142857142"
                            class="apexcharts-marker"
                            stroke="#ffffff"
                            fill="#03c3ec"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            rel="5"
                            j="5"
                            index="1"
                            default-marker-size="0"
                          ></circle>
                        </g>
                        <g class="apexcharts-series-markers">
                          <circle
                            id="SvgjsCircle2046"
                            r="0"
                            cx="0"
                            cy="0"
                            class="apexcharts-marker wfkh66yls"
                            stroke="#ffffff"
                            fill="#03c3ec"
                            fill-opacity="1"
                            stroke-width="1"
                            stroke-opacity="1"
                            default-marker-size="0"
                          ></circle>
                        </g>
                      </g>
                    </g>
                    <g id="SvgjsG1959" class="apexcharts-yaxis"></g>
                    <g
                      id="SvgjsG1962"
                      class="apexcharts-datalabels"
                      data:realIndex="0"
                    ></g>
                    <g
                      id="SvgjsG1988"
                      class="apexcharts-datalabels"
                      data:realIndex="1"
                    ></g>
                  </g>
                  <line
                    id="SvgjsLine2040"
                    x1="0"
                    y1="0"
                    x2="363.515625"
                    y2="0"
                    stroke="#b6b6b6"
                    stroke-dasharray="0"
                    stroke-width="1"
                    stroke-linecap="butt"
                    class="apexcharts-ycrosshairs"
                  ></line>
                  <line
                    id="SvgjsLine2041"
                    x1="0"
                    y1="0"
                    x2="363.515625"
                    y2="0"
                    stroke-dasharray="0"
                    stroke-width="0"
                    stroke-linecap="butt"
                    class="apexcharts-ycrosshairs-hidden"
                  ></line>
                  <g
                    id="SvgjsG2042"
                    class="apexcharts-yaxis-annotations"
                  ></g>
                  <g
                    id="SvgjsG2043"
                    class="apexcharts-xaxis-annotations"
                  ></g>
                  <g
                    id="SvgjsG2044"
                    class="apexcharts-point-annotations"
                  ></g>
                </g>
                <g
                  id="SvgjsG1954"
                  class="apexcharts-annotations"
                ></g>
              </svg>
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
                    style="background-color: rgb(105, 108, 255)"
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
                    style="background-color: rgb(3, 195, 236)"
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
            </div>
          </div>
          <div class="resize-triggers">
            <div class="expand-trigger">
              <div style="width: 446px; height: 408px"></div>
            </div>
            <div class="contract-trigger"></div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Performance -->

    <!-- Conversion rate -->
    <div class="col-md-6 col-xxl-4 mb-6">
      <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
          <div class="card-title mb-0">
            <h5 class="mb-1 me-2">Conversion Rate</h5>
            <p class="card-subtitle">Compared To Last Month</p>
          </div>
          <div class="dropdown">
            <button
              class="btn text-muted p-0"
              type="button"
              id="conversionRate"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="bx bx-dots-vertical-rounded bx-lg"></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="conversionRate"
            >
              <a class="dropdown-item" href="javascript:void(0);"
                >Select All</a
              >
              <a class="dropdown-item" href="javascript:void(0);"
                >Refresh</a
              >
              <a class="dropdown-item" href="javascript:void(0);"
                >Share</a
              >
            </div>
          </div>
        </div>
        <div class="card-body pt-4">
          <div
            class="d-flex justify-content-between align-items-center mb-6"
            style="position: relative"
          >
            <div class="d-flex flex-row align-items-center gap-2">
              <h3 class="mb-0">8.72%</h3>
              <small class="text-success">
                <i class="bx bx-chevron-up bx-lg"></i>
                4.8%
              </small>
            </div>
            <div id="conversionRateChart" style="min-height: 80px">
              <div
                id="apexchartskrfa2jo9"
                class="apexcharts-canvas apexchartskrfa2jo9 apexcharts-theme-light"
                style="width: 140px; height: 80px"
              >
                <svg
                  id="SvgjsSvg2047"
                  width="140"
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
                    id="SvgjsG2049"
                    class="apexcharts-inner apexcharts-graphical"
                    transform="translate(0, 0)"
                  >
                    <defs id="SvgjsDefs2048">
                      <clippath id="gridRectMaskkrfa2jo9">
                        <rect
                          id="SvgjsRect2054"
                          width="141"
                          height="85"
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
                        id="forecastMaskkrfa2jo9"
                      ></clippath>
                      <clippath
                        id="nonForecastMaskkrfa2jo9"
                      ></clippath>
                      <clippath id="gridRectMarkerMaskkrfa2jo9">
                        <rect
                          id="SvgjsRect2055"
                          width="160"
                          height="108"
                          x="-14"
                          y="-14"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fff"
                        ></rect>
                      </clippath>
                      <filter
                        id="SvgjsFilter2068"
                        filterUnits="userSpaceOnUse"
                        width="200%"
                        height="200%"
                        x="-50%"
                        y="-50%"
                      >
                        <feflood
                          id="SvgjsFeFlood2069"
                          flood-color="#696cff"
                          flood-opacity="0.15"
                          result="SvgjsFeFlood2069Out"
                          in="SourceGraphic"
                        ></feflood>
                        <fecomposite
                          id="SvgjsFeComposite2070"
                          in="SvgjsFeFlood2069Out"
                          in2="SourceAlpha"
                          operator="in"
                          result="SvgjsFeComposite2070Out"
                        ></fecomposite>
                        <feoffset
                          id="SvgjsFeOffset2071"
                          dx="5"
                          dy="10"
                          result="SvgjsFeOffset2071Out"
                          in="SvgjsFeComposite2070Out"
                        ></feoffset>
                        <fegaussianblur
                          id="SvgjsFeGaussianBlur2072"
                          stdDeviation="3 "
                          result="SvgjsFeGaussianBlur2072Out"
                          in="SvgjsFeOffset2071Out"
                        ></fegaussianblur>
                        <femerge
                          id="SvgjsFeMerge2073"
                          result="SvgjsFeMerge2073Out"
                          in="SourceGraphic"
                        >
                          <femergenode
                            id="SvgjsFeMergeNode2074"
                            in="SvgjsFeGaussianBlur2072Out"
                          ></femergenode>
                          <femergenode
                            id="SvgjsFeMergeNode2075"
                            in="[object Arguments]"
                          ></femergenode>
                        </femerge>
                        <feblend
                          id="SvgjsFeBlend2076"
                          in="SourceGraphic"
                          in2="SvgjsFeMerge2073Out"
                          mode="normal"
                          result="SvgjsFeBlend2076Out"
                        ></feblend>
                      </filter>
                    </defs>
                    <line
                      id="SvgjsLine2053"
                      x1="0"
                      y1="0"
                      x2="0"
                      y2="80"
                      stroke="#b6b6b6"
                      stroke-dasharray="3"
                      stroke-linecap="butt"
                      class="apexcharts-xcrosshairs"
                      x="0"
                      y="0"
                      width="1"
                      height="80"
                      fill="#b1b9c4"
                      filter="none"
                      fill-opacity="0.9"
                      stroke-width="1"
                    ></line>
                    <g
                      id="SvgjsG2077"
                      class="apexcharts-xaxis"
                      transform="translate(0, 0)"
                    >
                      <g
                        id="SvgjsG2078"
                        class="apexcharts-xaxis-texts-g"
                        transform="translate(0, -4)"
                      ></g>
                    </g>
                    <g id="SvgjsG2084" class="apexcharts-grid">
                      <g
                        id="SvgjsG2085"
                        class="apexcharts-gridlines-horizontal"
                        style="display: none"
                      >
                        <line
                          id="SvgjsLine2087"
                          x1="0"
                          y1="0"
                          x2="132"
                          y2="0"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine2088"
                          x1="0"
                          y1="16"
                          x2="132"
                          y2="16"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine2089"
                          x1="0"
                          y1="32"
                          x2="132"
                          y2="32"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine2090"
                          x1="0"
                          y1="48"
                          x2="132"
                          y2="48"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine2091"
                          x1="0"
                          y1="64"
                          x2="132"
                          y2="64"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine2092"
                          x1="0"
                          y1="80"
                          x2="132"
                          y2="80"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                      </g>
                      <g
                        id="SvgjsG2086"
                        class="apexcharts-gridlines-vertical"
                        style="display: none"
                      ></g>
                      <line
                        id="SvgjsLine2094"
                        x1="0"
                        y1="80"
                        x2="132"
                        y2="80"
                        stroke="transparent"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                      ></line>
                      <line
                        id="SvgjsLine2093"
                        x1="0"
                        y1="1"
                        x2="0"
                        y2="80"
                        stroke="transparent"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                      ></line>
                    </g>
                    <g
                      id="SvgjsG2056"
                      class="apexcharts-line-series apexcharts-plot-series"
                    >
                      <g
                        id="SvgjsG2057"
                        class="apexcharts-series"
                        seriesName="seriesx1"
                        data:longestSeries="true"
                        rel="1"
                        data:realIndex="0"
                      >
                        <path
                          id="SvgjsPath2067"
                          d="M 0 70.93333333333334C 15.399999999999999 70.93333333333334 28.6 32 44 32C 59.4 32 72.6 58.66666666666667 88 58.66666666666667C 103.4 58.66666666666667 116.6 13.333333333333343 132 13.333333333333343"
                          fill="none"
                          fill-opacity="1"
                          stroke="rgba(105,108,255,0.85)"
                          stroke-opacity="1"
                          stroke-linecap="butt"
                          stroke-width="5"
                          stroke-dasharray="0"
                          class="apexcharts-line"
                          index="0"
                          clip-path="url(#gridRectMaskkrfa2jo9)"
                          filter="url(#SvgjsFilter2068)"
                          pathTo="M 0 70.93333333333334C 15.399999999999999 70.93333333333334 28.6 32 44 32C 59.4 32 72.6 58.66666666666667 88 58.66666666666667C 103.4 58.66666666666667 116.6 13.333333333333343 132 13.333333333333343"
                          pathFrom="M -1 144L -1 144L 44 144L 88 144L 132 144"
                        ></path>
                        <g
                          id="SvgjsG2058"
                          class="apexcharts-series-markers-wrap"
                          data:realIndex="0"
                        >
                          <g
                            id="SvgjsG2060"
                            class="apexcharts-series-markers"
                            clip-path="url(#gridRectMarkerMaskkrfa2jo9)"
                          >
                            <circle
                              id="SvgjsCircle2061"
                              r="6"
                              cx="0"
                              cy="70.93333333333334"
                              class="apexcharts-marker no-pointer-events w7yrl3m07"
                              stroke="transparent"
                              fill="transparent"
                              fill-opacity="1"
                              stroke-width="4"
                              stroke-opacity="0.9"
                              rel="0"
                              j="0"
                              index="0"
                              default-marker-size="6"
                            ></circle>
                            <circle
                              id="SvgjsCircle2062"
                              r="6"
                              cx="44"
                              cy="32"
                              class="apexcharts-marker no-pointer-events wf4tsp90b"
                              stroke="transparent"
                              fill="transparent"
                              fill-opacity="1"
                              stroke-width="4"
                              stroke-opacity="0.9"
                              rel="1"
                              j="1"
                              index="0"
                              default-marker-size="6"
                            ></circle>
                          </g>
                          <g
                            id="SvgjsG2063"
                            class="apexcharts-series-markers"
                            clip-path="url(#gridRectMarkerMaskkrfa2jo9)"
                          >
                            <circle
                              id="SvgjsCircle2064"
                              r="6"
                              cx="88"
                              cy="58.66666666666667"
                              class="apexcharts-marker no-pointer-events wjialv8nb"
                              stroke="transparent"
                              fill="transparent"
                              fill-opacity="1"
                              stroke-width="4"
                              stroke-opacity="0.9"
                              rel="2"
                              j="2"
                              index="0"
                              default-marker-size="6"
                            ></circle>
                          </g>
                          <g
                            id="SvgjsG2065"
                            class="apexcharts-series-markers"
                            clip-path="url(#gridRectMarkerMaskkrfa2jo9)"
                          >
                            <circle
                              id="SvgjsCircle2066"
                              r="6"
                              cx="132"
                              cy="13.333333333333343"
                              class="apexcharts-marker no-pointer-events wqx26vshz"
                              stroke="#696cff"
                              fill="#ffffff"
                              fill-opacity="1"
                              stroke-width="4"
                              stroke-opacity="0.9"
                              rel="3"
                              j="3"
                              index="0"
                              default-marker-size="6"
                            ></circle>
                          </g>
                        </g>
                      </g>
                      <g
                        id="SvgjsG2059"
                        class="apexcharts-datalabels"
                        data:realIndex="0"
                      ></g>
                    </g>
                    <line
                      id="SvgjsLine2095"
                      x1="0"
                      y1="0"
                      x2="132"
                      y2="0"
                      stroke="#b6b6b6"
                      stroke-dasharray="0"
                      stroke-width="1"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs"
                    ></line>
                    <line
                      id="SvgjsLine2096"
                      x1="0"
                      y1="0"
                      x2="132"
                      y2="0"
                      stroke-dasharray="0"
                      stroke-width="0"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs-hidden"
                    ></line>
                    <g
                      id="SvgjsG2097"
                      class="apexcharts-yaxis-annotations"
                    ></g>
                    <g
                      id="SvgjsG2098"
                      class="apexcharts-xaxis-annotations"
                    ></g>
                    <g
                      id="SvgjsG2099"
                      class="apexcharts-point-annotations"
                    ></g>
                  </g>
                  <rect
                    id="SvgjsRect2052"
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
                    id="SvgjsG2083"
                    class="apexcharts-yaxis"
                    rel="0"
                    transform="translate(-18, 0)"
                  ></g>
                  <g
                    id="SvgjsG2050"
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
                      style="background-color: rgb(105, 108, 255)"
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
              </div>
            </div>
            <div class="resize-triggers">
              <div class="expand-trigger">
                <div style="width: 398px; height: 81px"></div>
              </div>
              <div class="contract-trigger"></div>
            </div>
          </div>
          <ul class="p-0 m-0">
            <li class="d-flex mb-6">
              <div
                class="d-flex w-100 flex-wrap justify-content-between gap-2"
              >
                <div class="me-2">
                  <h6 class="mb-0 fw-normal">Impressions</h6>
                  <small>12.4k Visits</small>
                </div>
                <div class="user-progress">
                  <i
                    class="bx bx-lg bx-up-arrow-alt text-success me-2"
                  ></i>
                  <span>12.8%</span>
                </div>
              </div>
            </li>
            <li class="d-flex mb-6">
              <div
                class="d-flex w-100 flex-wrap justify-content-between gap-2"
              >
                <div class="me-2">
                  <h6 class="mb-0 fw-normal">Added To Cart</h6>
                  <small>32 Product in cart</small>
                </div>
                <div class="user-progress">
                  <i
                    class="bx bx-lg bx-down-arrow-alt text-danger me-2"
                  ></i>
                  <span>- 8.5% </span>
                </div>
              </div>
            </li>
            <li class="d-flex mb-6">
              <div
                class="d-flex w-100 flex-wrap justify-content-between gap-2"
              >
                <div class="me-2">
                  <h6 class="mb-0 fw-normal">Checkout</h6>
                  <small>21 Products checkout</small>
                </div>
                <div class="user-progress">
                  <i
                    class="bx bx-lg bx-up-arrow-alt text-success me-2"
                  ></i>
                  <span>9.12%</span>
                </div>
              </div>
            </li>
            <li class="d-flex">
              <div
                class="d-flex w-100 flex-wrap justify-content-between gap-2"
              >
                <div class="me-2">
                  <h6 class="mb-0 fw-normal">Purchased</h6>
                  <small>12 Orders</small>
                </div>
                <div class="user-progress">
                  <i
                    class="bx bx-lg bx-up-arrow-alt text-success me-2"
                  ></i>
                  <span>2.83%</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--/ Conversion rate -->

    <div class="col-md-12 col-xxl-4">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-6">
          <div class="card h-100">
            <div class="card-body">
              <div
                class="card-title d-flex align-items-start justify-content-between mb-4"
              >
                <div class="avatar flex-shrink-0">
                  <img
                    src="./assets/computer.png"
                    alt="computer"
                    class="rounded"
                  />
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="cardOpt5"
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
                    aria-labelledby="cardOpt5"
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
              <p class="mb-1">Revenue</p>
              <h4 class="card-title mb-3">$42,389</h4>
              <small class="text-success fw-medium"
                ><i class="bx bx-up-arrow-alt"></i> +52.18%</small
              >
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-6">
          <div class="card h-100">
            <div class="card-body">
              <span class="d-block fw-medium mb-1">Sales</span>
              <h4 class="card-title mb-3">482k</h4>
              <span class="badge bg-label-info mb-5">+34%</span>
              <small class="d-block mb-1">Sales Target</small>
              <div class="d-flex align-items-center">
                <div class="progress w-75 me-2" style="height: 8px">
                  <div
                    class="progress-bar bg-info shadow-none"
                    style="width: 78%"
                    role="progressbar"
                    aria-valuenow="78"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <small>78%</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-12 mb-6">
          <div class="card">
            <div class="card-body">
              <div
                class="d-flex justify-content-between gap-6"
                style="position: relative"
              >
                <div
                  class="d-flex align-items-start flex-column justify-content-between"
                >
                  <div class="card-title">
                    <h5 class="mb-0">Expenses</h5>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="mt-auto">
                      <h4 class="mb-0">4,234</h4>
                      <span
                        class="text-danger text-nowrap fw-medium"
                        ><i class="bx bx-down-arrow-alt"></i>
                        8.2%</span
                      >
                    </div>
                  </div>
                  <span class="badge bg-label-secondary"
                    >2023 YEAR</span
                  >
                </div>
                <div
                  id="expensesBarChart"
                  style="min-height: 205px"
                >
                  <div
                    id="apexchartsikp0nqlm"
                    class="apexcharts-canvas apexchartsikp0nqlm apexcharts-theme-light"
                    style="width: 284px; height: 190px"
                  >
                    <svg
                      id="SvgjsSvg2100"
                      width="284"
                      height="190"
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
                        id="SvgjsG2102"
                        class="apexcharts-inner apexcharts-graphical"
                        transform="translate(12, 20)"
                      >
                        <defs id="SvgjsDefs2101">
                          <lineargradient
                            id="SvgjsLinearGradient2105"
                            x1="0"
                            y1="0"
                            x2="0"
                            y2="1"
                          >
                            <stop
                              id="SvgjsStop2106"
                              stop-opacity="0.4"
                              stop-color="rgba(216,227,240,0.4)"
                              offset="0"
                            ></stop>
                            <stop
                              id="SvgjsStop2107"
                              stop-opacity="0.5"
                              stop-color="rgba(190,209,230,0.5)"
                              offset="1"
                            ></stop>
                            <stop
                              id="SvgjsStop2108"
                              stop-opacity="0.5"
                              stop-color="rgba(190,209,230,0.5)"
                              offset="1"
                            ></stop>
                          </lineargradient>
                          <clippath id="gridRectMaskikp0nqlm">
                            <rect
                              id="SvgjsRect2110"
                              width="268"
                              height="157"
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
                            id="forecastMaskikp0nqlm"
                          ></clippath>
                          <clippath
                            id="nonForecastMaskikp0nqlm"
                          ></clippath>
                          <clippath id="gridRectMarkerMaskikp0nqlm">
                            <rect
                              id="SvgjsRect2111"
                              width="266"
                              height="159"
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
                          id="SvgjsRect2109"
                          width="10.48"
                          height="155"
                          x="0"
                          y="0"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke-dasharray="3"
                          fill="url(#SvgjsLinearGradient2105)"
                          class="apexcharts-xcrosshairs"
                          y2="155"
                          filter="none"
                          fill-opacity="0.9"
                        ></rect>
                        <g
                          id="SvgjsG2137"
                          class="apexcharts-xaxis"
                          transform="translate(0, 0)"
                        >
                          <g
                            id="SvgjsG2138"
                            class="apexcharts-xaxis-texts-g"
                            transform="translate(0, -4)"
                          ></g>
                        </g>
                        <g id="SvgjsG2147" class="apexcharts-grid">
                          <g
                            id="SvgjsG2148"
                            class="apexcharts-gridlines-horizontal"
                            style="display: none"
                          >
                            <line
                              id="SvgjsLine2150"
                              x1="0"
                              y1="0"
                              x2="262"
                              y2="0"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine2151"
                              x1="0"
                              y1="38.75"
                              x2="262"
                              y2="38.75"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine2152"
                              x1="0"
                              y1="77.5"
                              x2="262"
                              y2="77.5"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine2153"
                              x1="0"
                              y1="116.25"
                              x2="262"
                              y2="116.25"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                            <line
                              id="SvgjsLine2154"
                              x1="0"
                              y1="155"
                              x2="262"
                              y2="155"
                              stroke="#e0e0e0"
                              stroke-dasharray="0"
                              stroke-linecap="butt"
                              class="apexcharts-gridline"
                            ></line>
                          </g>
                          <g
                            id="SvgjsG2149"
                            class="apexcharts-gridlines-vertical"
                            style="display: none"
                          ></g>
                          <line
                            id="SvgjsLine2156"
                            x1="0"
                            y1="155"
                            x2="262"
                            y2="155"
                            stroke="transparent"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                          ></line>
                          <line
                            id="SvgjsLine2155"
                            x1="0"
                            y1="1"
                            x2="0"
                            y2="155"
                            stroke="transparent"
                            stroke-dasharray="0"
                            stroke-linecap="butt"
                          ></line>
                        </g>
                        <g
                          id="SvgjsG2112"
                          class="apexcharts-bar-series apexcharts-plot-series"
                        >
                          <g
                            id="SvgjsG2113"
                            class="apexcharts-series"
                            seriesName="2021"
                            rel="1"
                            data:realIndex="0"
                          >
                            <path
                              id="SvgjsPath2115"
                              d="M 7.859999999999999 72.5L 7.859999999999999 53.4375Q 7.859999999999999 48.4375 12.86 48.4375L 11.34 48.4375Q 16.34 48.4375 16.34 53.4375L 16.34 53.4375L 16.34 72.5Q 16.34 77.5 11.34 77.5L 12.86 77.5Q 7.859999999999999 77.5 7.859999999999999 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 7.859999999999999 72.5L 7.859999999999999 53.4375Q 7.859999999999999 48.4375 12.86 48.4375L 11.34 48.4375Q 16.34 48.4375 16.34 53.4375L 16.34 53.4375L 16.34 72.5Q 16.34 77.5 11.34 77.5L 12.86 77.5Q 7.859999999999999 77.5 7.859999999999999 72.5z"
                              pathFrom="M 7.859999999999999 72.5L 7.859999999999999 72.5L 16.34 72.5L 16.34 72.5L 16.34 72.5L 16.34 72.5L 16.34 72.5L 7.859999999999999 72.5"
                              cy="48.4375"
                              cx="33.06"
                              j="0"
                              val="15"
                              barHeight="29.0625"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2116"
                              d="M 34.06 72.5L 34.06 10.8125Q 34.06 5.8125 39.06 5.8125L 37.540000000000006 5.8125Q 42.540000000000006 5.8125 42.540000000000006 10.8125L 42.540000000000006 10.8125L 42.540000000000006 72.5Q 42.540000000000006 77.5 37.540000000000006 77.5L 39.06 77.5Q 34.06 77.5 34.06 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 34.06 72.5L 34.06 10.8125Q 34.06 5.8125 39.06 5.8125L 37.540000000000006 5.8125Q 42.540000000000006 5.8125 42.540000000000006 10.8125L 42.540000000000006 10.8125L 42.540000000000006 72.5Q 42.540000000000006 77.5 37.540000000000006 77.5L 39.06 77.5Q 34.06 77.5 34.06 72.5z"
                              pathFrom="M 34.06 72.5L 34.06 72.5L 42.540000000000006 72.5L 42.540000000000006 72.5L 42.540000000000006 72.5L 42.540000000000006 72.5L 42.540000000000006 72.5L 34.06 72.5"
                              cy="5.8125"
                              cx="59.260000000000005"
                              j="1"
                              val="37"
                              barHeight="71.6875"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2117"
                              d="M 60.260000000000005 72.5L 60.260000000000005 55.375Q 60.260000000000005 50.375 65.26 50.375L 63.74000000000001 50.375Q 68.74000000000001 50.375 68.74000000000001 55.375L 68.74000000000001 55.375L 68.74000000000001 72.5Q 68.74000000000001 77.5 63.74000000000001 77.5L 65.26 77.5Q 60.260000000000005 77.5 60.260000000000005 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 60.260000000000005 72.5L 60.260000000000005 55.375Q 60.260000000000005 50.375 65.26 50.375L 63.74000000000001 50.375Q 68.74000000000001 50.375 68.74000000000001 55.375L 68.74000000000001 55.375L 68.74000000000001 72.5Q 68.74000000000001 77.5 63.74000000000001 77.5L 65.26 77.5Q 60.260000000000005 77.5 60.260000000000005 72.5z"
                              pathFrom="M 60.260000000000005 72.5L 60.260000000000005 72.5L 68.74000000000001 72.5L 68.74000000000001 72.5L 68.74000000000001 72.5L 68.74000000000001 72.5L 68.74000000000001 72.5L 60.260000000000005 72.5"
                              cy="50.375"
                              cx="85.46000000000001"
                              j="2"
                              val="14"
                              barHeight="27.125"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2118"
                              d="M 86.46000000000001 72.5L 86.46000000000001 24.375Q 86.46000000000001 19.375 91.46000000000001 19.375L 89.94000000000001 19.375Q 94.94000000000001 19.375 94.94000000000001 24.375L 94.94000000000001 24.375L 94.94000000000001 72.5Q 94.94000000000001 77.5 89.94000000000001 77.5L 91.46000000000001 77.5Q 86.46000000000001 77.5 86.46000000000001 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 86.46000000000001 72.5L 86.46000000000001 24.375Q 86.46000000000001 19.375 91.46000000000001 19.375L 89.94000000000001 19.375Q 94.94000000000001 19.375 94.94000000000001 24.375L 94.94000000000001 24.375L 94.94000000000001 72.5Q 94.94000000000001 77.5 89.94000000000001 77.5L 91.46000000000001 77.5Q 86.46000000000001 77.5 86.46000000000001 72.5z"
                              pathFrom="M 86.46000000000001 72.5L 86.46000000000001 72.5L 94.94000000000001 72.5L 94.94000000000001 72.5L 94.94000000000001 72.5L 94.94000000000001 72.5L 94.94000000000001 72.5L 86.46000000000001 72.5"
                              cy="19.375"
                              cx="111.66000000000001"
                              j="3"
                              val="30"
                              barHeight="58.125"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2119"
                              d="M 112.66000000000001 72.5L 112.66000000000001 8.875Q 112.66000000000001 3.875 117.66000000000001 3.875L 116.14000000000001 3.875Q 121.14000000000001 3.875 121.14000000000001 8.875L 121.14000000000001 8.875L 121.14000000000001 72.5Q 121.14000000000001 77.5 116.14000000000001 77.5L 117.66000000000001 77.5Q 112.66000000000001 77.5 112.66000000000001 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 112.66000000000001 72.5L 112.66000000000001 8.875Q 112.66000000000001 3.875 117.66000000000001 3.875L 116.14000000000001 3.875Q 121.14000000000001 3.875 121.14000000000001 8.875L 121.14000000000001 8.875L 121.14000000000001 72.5Q 121.14000000000001 77.5 116.14000000000001 77.5L 117.66000000000001 77.5Q 112.66000000000001 77.5 112.66000000000001 72.5z"
                              pathFrom="M 112.66000000000001 72.5L 112.66000000000001 72.5L 121.14000000000001 72.5L 121.14000000000001 72.5L 121.14000000000001 72.5L 121.14000000000001 72.5L 121.14000000000001 72.5L 112.66000000000001 72.5"
                              cy="3.875"
                              cx="137.86"
                              j="4"
                              val="38"
                              barHeight="73.625"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2120"
                              d="M 138.86 72.5L 138.86 24.375Q 138.86 19.375 143.86 19.375L 142.34 19.375Q 147.34 19.375 147.34 24.375L 147.34 24.375L 147.34 72.5Q 147.34 77.5 142.34 77.5L 143.86 77.5Q 138.86 77.5 138.86 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 138.86 72.5L 138.86 24.375Q 138.86 19.375 143.86 19.375L 142.34 19.375Q 147.34 19.375 147.34 24.375L 147.34 24.375L 147.34 72.5Q 147.34 77.5 142.34 77.5L 143.86 77.5Q 138.86 77.5 138.86 72.5z"
                              pathFrom="M 138.86 72.5L 138.86 72.5L 147.34 72.5L 147.34 72.5L 147.34 72.5L 147.34 72.5L 147.34 72.5L 138.86 72.5"
                              cy="19.375"
                              cx="164.06"
                              j="5"
                              val="30"
                              barHeight="58.125"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2121"
                              d="M 165.06 72.5L 165.06 43.75Q 165.06 38.75 170.06 38.75L 168.54 38.75Q 173.54 38.75 173.54 43.75L 173.54 43.75L 173.54 72.5Q 173.54 77.5 168.54 77.5L 170.06 77.5Q 165.06 77.5 165.06 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 165.06 72.5L 165.06 43.75Q 165.06 38.75 170.06 38.75L 168.54 38.75Q 173.54 38.75 173.54 43.75L 173.54 43.75L 173.54 72.5Q 173.54 77.5 168.54 77.5L 170.06 77.5Q 165.06 77.5 165.06 72.5z"
                              pathFrom="M 165.06 72.5L 165.06 72.5L 173.54 72.5L 173.54 72.5L 173.54 72.5L 173.54 72.5L 173.54 72.5L 165.06 72.5"
                              cy="38.75"
                              cx="190.26"
                              j="6"
                              val="20"
                              barHeight="38.75"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2122"
                              d="M 191.26 72.5L 191.26 57.3125Q 191.26 52.3125 196.26 52.3125L 194.73999999999998 52.3125Q 199.73999999999998 52.3125 199.73999999999998 57.3125L 199.73999999999998 57.3125L 199.73999999999998 72.5Q 199.73999999999998 77.5 194.73999999999998 77.5L 196.26 77.5Q 191.26 77.5 191.26 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 191.26 72.5L 191.26 57.3125Q 191.26 52.3125 196.26 52.3125L 194.73999999999998 52.3125Q 199.73999999999998 52.3125 199.73999999999998 57.3125L 199.73999999999998 57.3125L 199.73999999999998 72.5Q 199.73999999999998 77.5 194.73999999999998 77.5L 196.26 77.5Q 191.26 77.5 191.26 72.5z"
                              pathFrom="M 191.26 72.5L 191.26 72.5L 199.73999999999998 72.5L 199.73999999999998 72.5L 199.73999999999998 72.5L 199.73999999999998 72.5L 199.73999999999998 72.5L 191.26 72.5"
                              cy="52.3125"
                              cx="216.45999999999998"
                              j="7"
                              val="13"
                              barHeight="25.1875"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2123"
                              d="M 217.45999999999998 72.5L 217.45999999999998 55.375Q 217.45999999999998 50.375 222.45999999999998 50.375L 220.93999999999997 50.375Q 225.93999999999997 50.375 225.93999999999997 55.375L 225.93999999999997 55.375L 225.93999999999997 72.5Q 225.93999999999997 77.5 220.93999999999997 77.5L 222.45999999999998 77.5Q 217.45999999999998 77.5 217.45999999999998 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 217.45999999999998 72.5L 217.45999999999998 55.375Q 217.45999999999998 50.375 222.45999999999998 50.375L 220.93999999999997 50.375Q 225.93999999999997 50.375 225.93999999999997 55.375L 225.93999999999997 55.375L 225.93999999999997 72.5Q 225.93999999999997 77.5 220.93999999999997 77.5L 222.45999999999998 77.5Q 217.45999999999998 77.5 217.45999999999998 72.5z"
                              pathFrom="M 217.45999999999998 72.5L 217.45999999999998 72.5L 225.93999999999997 72.5L 225.93999999999997 72.5L 225.93999999999997 72.5L 225.93999999999997 72.5L 225.93999999999997 72.5L 217.45999999999998 72.5"
                              cy="50.375"
                              cx="242.65999999999997"
                              j="8"
                              val="14"
                              barHeight="27.125"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2124"
                              d="M 243.65999999999997 72.5L 243.65999999999997 37.9375Q 243.65999999999997 32.9375 248.65999999999997 32.9375L 247.13999999999996 32.9375Q 252.13999999999996 32.9375 252.13999999999996 37.9375L 252.13999999999996 37.9375L 252.13999999999996 72.5Q 252.13999999999996 77.5 247.13999999999996 77.5L 248.65999999999997 77.5Q 243.65999999999997 77.5 243.65999999999997 72.5z"
                              fill="rgba(105,108,255,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="0"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 243.65999999999997 72.5L 243.65999999999997 37.9375Q 243.65999999999997 32.9375 248.65999999999997 32.9375L 247.13999999999996 32.9375Q 252.13999999999996 32.9375 252.13999999999996 37.9375L 252.13999999999996 37.9375L 252.13999999999996 72.5Q 252.13999999999996 77.5 247.13999999999996 77.5L 248.65999999999997 77.5Q 243.65999999999997 77.5 243.65999999999997 72.5z"
                              pathFrom="M 243.65999999999997 72.5L 243.65999999999997 72.5L 252.13999999999996 72.5L 252.13999999999996 72.5L 252.13999999999996 72.5L 252.13999999999996 72.5L 252.13999999999996 72.5L 243.65999999999997 72.5"
                              cy="32.9375"
                              cx="268.85999999999996"
                              j="9"
                              val="23"
                              barHeight="44.5625"
                              barWidth="10.48"
                            ></path>
                          </g>
                          <g
                            id="SvgjsG2125"
                            class="apexcharts-series"
                            seriesName="2020"
                            rel="2"
                            data:realIndex="1"
                          >
                            <path
                              id="SvgjsPath2127"
                              d="M 7.859999999999999 87.5L 7.859999999999999 141.4375Q 7.859999999999999 146.4375 12.86 146.4375L 11.34 146.4375Q 16.34 146.4375 16.34 141.4375L 16.34 141.4375L 16.34 87.5Q 16.34 82.5 11.34 82.5L 12.86 82.5Q 7.859999999999999 82.5 7.859999999999999 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 7.859999999999999 87.5L 7.859999999999999 141.4375Q 7.859999999999999 146.4375 12.86 146.4375L 11.34 146.4375Q 16.34 146.4375 16.34 141.4375L 16.34 141.4375L 16.34 87.5Q 16.34 82.5 11.34 82.5L 12.86 82.5Q 7.859999999999999 82.5 7.859999999999999 87.5z"
                              pathFrom="M 7.859999999999999 87.5L 7.859999999999999 87.5L 16.34 87.5L 16.34 87.5L 16.34 87.5L 16.34 87.5L 16.34 87.5L 7.859999999999999 87.5"
                              cy="136.4375"
                              cx="33.06"
                              j="0"
                              val="-33"
                              barHeight="-63.9375"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2128"
                              d="M 34.06 87.5L 34.06 122.0625Q 34.06 127.0625 39.06 127.0625L 37.540000000000006 127.0625Q 42.540000000000006 127.0625 42.540000000000006 122.0625L 42.540000000000006 122.0625L 42.540000000000006 87.5Q 42.540000000000006 82.5 37.540000000000006 82.5L 39.06 82.5Q 34.06 82.5 34.06 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 34.06 87.5L 34.06 122.0625Q 34.06 127.0625 39.06 127.0625L 37.540000000000006 127.0625Q 42.540000000000006 127.0625 42.540000000000006 122.0625L 42.540000000000006 122.0625L 42.540000000000006 87.5Q 42.540000000000006 82.5 37.540000000000006 82.5L 39.06 82.5Q 34.06 82.5 34.06 87.5z"
                              pathFrom="M 34.06 87.5L 34.06 87.5L 42.540000000000006 87.5L 42.540000000000006 87.5L 42.540000000000006 87.5L 42.540000000000006 87.5L 42.540000000000006 87.5L 34.06 87.5"
                              cy="117.0625"
                              cx="59.260000000000005"
                              j="1"
                              val="-23"
                              barHeight="-44.5625"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2129"
                              d="M 60.260000000000005 87.5L 60.260000000000005 133.6875Q 60.260000000000005 138.6875 65.26 138.6875L 63.74000000000001 138.6875Q 68.74000000000001 138.6875 68.74000000000001 133.6875L 68.74000000000001 133.6875L 68.74000000000001 87.5Q 68.74000000000001 82.5 63.74000000000001 82.5L 65.26 82.5Q 60.260000000000005 82.5 60.260000000000005 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 60.260000000000005 87.5L 60.260000000000005 133.6875Q 60.260000000000005 138.6875 65.26 138.6875L 63.74000000000001 138.6875Q 68.74000000000001 138.6875 68.74000000000001 133.6875L 68.74000000000001 133.6875L 68.74000000000001 87.5Q 68.74000000000001 82.5 63.74000000000001 82.5L 65.26 82.5Q 60.260000000000005 82.5 60.260000000000005 87.5z"
                              pathFrom="M 60.260000000000005 87.5L 60.260000000000005 87.5L 68.74000000000001 87.5L 68.74000000000001 87.5L 68.74000000000001 87.5L 68.74000000000001 87.5L 68.74000000000001 87.5L 60.260000000000005 87.5"
                              cy="128.6875"
                              cx="85.46000000000001"
                              j="2"
                              val="-29"
                              barHeight="-56.1875"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2130"
                              d="M 86.46000000000001 87.5L 86.46000000000001 118.1875Q 86.46000000000001 123.1875 91.46000000000001 123.1875L 89.94000000000001 123.1875Q 94.94000000000001 123.1875 94.94000000000001 118.1875L 94.94000000000001 118.1875L 94.94000000000001 87.5Q 94.94000000000001 82.5 89.94000000000001 82.5L 91.46000000000001 82.5Q 86.46000000000001 82.5 86.46000000000001 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 86.46000000000001 87.5L 86.46000000000001 118.1875Q 86.46000000000001 123.1875 91.46000000000001 123.1875L 89.94000000000001 123.1875Q 94.94000000000001 123.1875 94.94000000000001 118.1875L 94.94000000000001 118.1875L 94.94000000000001 87.5Q 94.94000000000001 82.5 89.94000000000001 82.5L 91.46000000000001 82.5Q 86.46000000000001 82.5 86.46000000000001 87.5z"
                              pathFrom="M 86.46000000000001 87.5L 86.46000000000001 87.5L 94.94000000000001 87.5L 94.94000000000001 87.5L 94.94000000000001 87.5L 94.94000000000001 87.5L 94.94000000000001 87.5L 86.46000000000001 87.5"
                              cy="113.1875"
                              cx="111.66000000000001"
                              j="3"
                              val="-21"
                              barHeight="-40.6875"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2131"
                              d="M 112.66000000000001 87.5L 112.66000000000001 125.9375Q 112.66000000000001 130.9375 117.66000000000001 130.9375L 116.14000000000001 130.9375Q 121.14000000000001 130.9375 121.14000000000001 125.9375L 121.14000000000001 125.9375L 121.14000000000001 87.5Q 121.14000000000001 82.5 116.14000000000001 82.5L 117.66000000000001 82.5Q 112.66000000000001 82.5 112.66000000000001 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 112.66000000000001 87.5L 112.66000000000001 125.9375Q 112.66000000000001 130.9375 117.66000000000001 130.9375L 116.14000000000001 130.9375Q 121.14000000000001 130.9375 121.14000000000001 125.9375L 121.14000000000001 125.9375L 121.14000000000001 87.5Q 121.14000000000001 82.5 116.14000000000001 82.5L 117.66000000000001 82.5Q 112.66000000000001 82.5 112.66000000000001 87.5z"
                              pathFrom="M 112.66000000000001 87.5L 112.66000000000001 87.5L 121.14000000000001 87.5L 121.14000000000001 87.5L 121.14000000000001 87.5L 121.14000000000001 87.5L 121.14000000000001 87.5L 112.66000000000001 87.5"
                              cy="120.9375"
                              cx="137.86"
                              j="4"
                              val="-25"
                              barHeight="-48.4375"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2132"
                              d="M 138.86 87.5L 138.86 118.1875Q 138.86 123.1875 143.86 123.1875L 142.34 123.1875Q 147.34 123.1875 147.34 118.1875L 147.34 118.1875L 147.34 87.5Q 147.34 82.5 142.34 82.5L 143.86 82.5Q 138.86 82.5 138.86 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 138.86 87.5L 138.86 118.1875Q 138.86 123.1875 143.86 123.1875L 142.34 123.1875Q 147.34 123.1875 147.34 118.1875L 147.34 118.1875L 147.34 87.5Q 147.34 82.5 142.34 82.5L 143.86 82.5Q 138.86 82.5 138.86 87.5z"
                              pathFrom="M 138.86 87.5L 138.86 87.5L 147.34 87.5L 147.34 87.5L 147.34 87.5L 147.34 87.5L 147.34 87.5L 138.86 87.5"
                              cy="113.1875"
                              cx="164.06"
                              j="5"
                              val="-21"
                              barHeight="-40.6875"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2133"
                              d="M 165.06 87.5L 165.06 122.0625Q 165.06 127.0625 170.06 127.0625L 168.54 127.0625Q 173.54 127.0625 173.54 122.0625L 173.54 122.0625L 173.54 87.5Q 173.54 82.5 168.54 82.5L 170.06 82.5Q 165.06 82.5 165.06 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 165.06 87.5L 165.06 122.0625Q 165.06 127.0625 170.06 127.0625L 168.54 127.0625Q 173.54 127.0625 173.54 122.0625L 173.54 122.0625L 173.54 87.5Q 173.54 82.5 168.54 82.5L 170.06 82.5Q 165.06 82.5 165.06 87.5z"
                              pathFrom="M 165.06 87.5L 165.06 87.5L 173.54 87.5L 173.54 87.5L 173.54 87.5L 173.54 87.5L 173.54 87.5L 165.06 87.5"
                              cy="117.0625"
                              cx="190.26"
                              j="6"
                              val="-23"
                              barHeight="-44.5625"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2134"
                              d="M 191.26 87.5L 191.26 114.3125Q 191.26 119.3125 196.26 119.3125L 194.73999999999998 119.3125Q 199.73999999999998 119.3125 199.73999999999998 114.3125L 199.73999999999998 114.3125L 199.73999999999998 87.5Q 199.73999999999998 82.5 194.73999999999998 82.5L 196.26 82.5Q 191.26 82.5 191.26 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 191.26 87.5L 191.26 114.3125Q 191.26 119.3125 196.26 119.3125L 194.73999999999998 119.3125Q 199.73999999999998 119.3125 199.73999999999998 114.3125L 199.73999999999998 114.3125L 199.73999999999998 87.5Q 199.73999999999998 82.5 194.73999999999998 82.5L 196.26 82.5Q 191.26 82.5 191.26 87.5z"
                              pathFrom="M 191.26 87.5L 191.26 87.5L 199.73999999999998 87.5L 199.73999999999998 87.5L 199.73999999999998 87.5L 199.73999999999998 87.5L 199.73999999999998 87.5L 191.26 87.5"
                              cy="109.3125"
                              cx="216.45999999999998"
                              j="7"
                              val="-19"
                              barHeight="-36.8125"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2135"
                              d="M 217.45999999999998 87.5L 217.45999999999998 149.1875Q 217.45999999999998 154.1875 222.45999999999998 154.1875L 220.93999999999997 154.1875Q 225.93999999999997 154.1875 225.93999999999997 149.1875L 225.93999999999997 149.1875L 225.93999999999997 87.5Q 225.93999999999997 82.5 220.93999999999997 82.5L 222.45999999999998 82.5Q 217.45999999999998 82.5 217.45999999999998 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 217.45999999999998 87.5L 217.45999999999998 149.1875Q 217.45999999999998 154.1875 222.45999999999998 154.1875L 220.93999999999997 154.1875Q 225.93999999999997 154.1875 225.93999999999997 149.1875L 225.93999999999997 149.1875L 225.93999999999997 87.5Q 225.93999999999997 82.5 220.93999999999997 82.5L 222.45999999999998 82.5Q 217.45999999999998 82.5 217.45999999999998 87.5z"
                              pathFrom="M 217.45999999999998 87.5L 217.45999999999998 87.5L 225.93999999999997 87.5L 225.93999999999997 87.5L 225.93999999999997 87.5L 225.93999999999997 87.5L 225.93999999999997 87.5L 217.45999999999998 87.5"
                              cy="144.1875"
                              cx="242.65999999999997"
                              j="8"
                              val="-37"
                              barHeight="-71.6875"
                              barWidth="10.48"
                            ></path>
                            <path
                              id="SvgjsPath2136"
                              d="M 243.65999999999997 87.5L 243.65999999999997 120.125Q 243.65999999999997 125.125 248.65999999999997 125.125L 247.13999999999996 125.125Q 252.13999999999996 125.125 252.13999999999996 120.125L 252.13999999999996 120.125L 252.13999999999996 87.5Q 252.13999999999996 82.5 247.13999999999996 82.5L 248.65999999999997 82.5Q 243.65999999999997 82.5 243.65999999999997 87.5z"
                              fill="rgba(255,171,0,1)"
                              fill-opacity="1"
                              stroke="#ffffff"
                              stroke-opacity="1"
                              stroke-linecap="round"
                              stroke-width="2"
                              stroke-dasharray="0"
                              class="apexcharts-bar-area"
                              index="1"
                              clip-path="url(#gridRectMaskikp0nqlm)"
                              pathTo="M 243.65999999999997 87.5L 243.65999999999997 120.125Q 243.65999999999997 125.125 248.65999999999997 125.125L 247.13999999999996 125.125Q 252.13999999999996 125.125 252.13999999999996 120.125L 252.13999999999996 120.125L 252.13999999999996 87.5Q 252.13999999999996 82.5 247.13999999999996 82.5L 248.65999999999997 82.5Q 243.65999999999997 82.5 243.65999999999997 87.5z"
                              pathFrom="M 243.65999999999997 87.5L 243.65999999999997 87.5L 252.13999999999996 87.5L 252.13999999999996 87.5L 252.13999999999996 87.5L 252.13999999999996 87.5L 252.13999999999996 87.5L 243.65999999999997 87.5"
                              cy="115.125"
                              cx="268.85999999999996"
                              j="9"
                              val="-22"
                              barHeight="-42.625"
                              barWidth="10.48"
                            ></path>
                          </g>
                          <g
                            id="SvgjsG2114"
                            class="apexcharts-datalabels"
                            data:realIndex="0"
                          ></g>
                          <g
                            id="SvgjsG2126"
                            class="apexcharts-datalabels"
                            data:realIndex="1"
                          ></g>
                        </g>
                        <line
                          id="SvgjsLine2157"
                          x1="0"
                          y1="0"
                          x2="262"
                          y2="0"
                          stroke="#b6b6b6"
                          stroke-dasharray="0"
                          stroke-width="1"
                          stroke-linecap="butt"
                          class="apexcharts-ycrosshairs"
                        ></line>
                        <line
                          id="SvgjsLine2158"
                          x1="0"
                          y1="0"
                          x2="262"
                          y2="0"
                          stroke-dasharray="0"
                          stroke-width="0"
                          stroke-linecap="butt"
                          class="apexcharts-ycrosshairs-hidden"
                        ></line>
                        <g
                          id="SvgjsG2159"
                          class="apexcharts-yaxis-annotations"
                        ></g>
                        <g
                          id="SvgjsG2160"
                          class="apexcharts-xaxis-annotations"
                        ></g>
                        <g
                          id="SvgjsG2161"
                          class="apexcharts-point-annotations"
                        ></g>
                      </g>
                      <g
                        id="SvgjsG2146"
                        class="apexcharts-yaxis"
                        rel="0"
                        transform="translate(-18, 0)"
                      ></g>
                      <g
                        id="SvgjsG2103"
                        class="apexcharts-annotations"
                      ></g>
                    </svg>
                    <div
                      class="apexcharts-legend"
                      style="max-height: 95px"
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
                            background-color: rgb(105, 108, 255);
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
                      <div
                        class="apexcharts-tooltip-series-group"
                        style="order: 2"
                      >
                        <span
                          class="apexcharts-tooltip-marker"
                          style="background-color: rgb(255, 171, 0)"
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
                    <div style="width: 398px; height: 206px"></div>
                  </div>
                  <div class="contract-trigger"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-xxl-8 mb-6 mb-lg-0">
      <div class="card">
        <div class="table-responsive text-nowrap">
          <table
            class="table table-sm text-nowrap table-border-top-0"
          >
            <thead>
              <tr>
                <th>Product</th>
                <th>Category</th>
                <th>Payment</th>
                <th>Order Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="./assets/oneplus-lg.png"
                      alt="Oneplus"
                      height="32"
                      width="32"
                      class="me-3"
                    />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">OnePlus 7Pro</h6>
                      <small class="text-body">OnePlus</small>
                    </div>
                  </div>
                </td>
                <td>
                  <span
                    class="badge bg-label-primary rounded-pill p-1_5 me-3"
                    ><i class="bx bx-mobile-alt bx-xs"></i
                  ></span>
                  Smart Phone
                </td>
                <td>
                  <div class="text-body">
                    <span class="text-primary fw-medium">$120</span
                    >/499
                  </div>
                  <small class="text-body">Partially Paid</small>
                </td>
                <td>
                  <span class="badge bg-label-primary"
                    >Confirmed</span
                  >
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
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> View
                        Details</a
                      >
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="./assets/magic-mouse.png"
                      alt="Apple"
                      height="32"
                      width="32"
                      class="me-3"
                    />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">Magic Mouse</h6>
                      <small class="text-body">Apple</small>
                    </div>
                  </div>
                </td>
                <td>
                  <span
                    class="badge bg-label-warning rounded-pill p-1_5 me-3"
                    ><i class="bx bx-mouse bx-xs"></i
                  ></span>
                  Mouse
                </td>
                <td>
                  <div>
                    <span class="text-primary fw-medium">$149</span>
                  </div>
                  <small class="text-body">Fully Paid</small>
                </td>
                <td>
                  <span class="badge bg-label-success"
                    >Completed</span
                  >
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
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> View
                        Details</a
                      >
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="./assets/imac-pro.png"
                      alt="Apple"
                      height="32"
                      width="32"
                      class="me-3"
                    />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">iMac Pro</h6>
                      <small class="text-body">Apple</small>
                    </div>
                  </div>
                </td>
                <td>
                  <span
                    class="badge bg-label-info rounded-pill p-1_5 me-3"
                    ><i class="bx bx-desktop bx-xs"></i
                  ></span>
                  Computer
                </td>
                <td>
                  <div class="text-body">
                    <span class="text-primary fw-medium">$0</span
                    >/899
                  </div>
                  <small class="text-body">Unpaid</small>
                </td>
                <td>
                  <span class="badge bg-label-danger"
                    >Cancelled</span
                  >
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
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> View
                        Details</a
                      >
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="./assets/note10.png"
                      alt="Samsung"
                      height="32"
                      width="32"
                      class="me-3"
                    />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">Note 10</h6>
                      <small class="text-body">Samsung</small>
                    </div>
                  </div>
                </td>
                <td>
                  <span
                    class="badge bg-label-primary rounded-pill p-1_5 me-3"
                    ><i class="bx bx-mobile-alt bx-xs"></i
                  ></span>
                  Smart Phone
                </td>
                <td>
                  <div>
                    <span class="text-primary fw-medium">$149</span>
                  </div>
                  <small class="text-body">Fully Paid</small>
                </td>
                <td>
                  <span class="badge bg-label-success"
                    >Completed</span
                  >
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
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> View
                        Details</a
                      >
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="./assets/iphone.png"
                      alt="Apple"
                      height="32"
                      width="32"
                      class="me-3"
                    />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">iPhone 11 Pro</h6>
                      <small class="text-body">Apple</small>
                    </div>
                  </div>
                </td>
                <td>
                  <span
                    class="badge bg-label-primary rounded-pill p-1_5 me-3"
                    ><i class="bx bx-mobile-alt bx-xs"></i
                  ></span>
                  Smart Phone
                </td>
                <td>
                  <div>
                    <span class="text-primary fw-medium">$399</span>
                  </div>
                  <small class="text-body">Fully Paid</small>
                </td>
                <td>
                  <span class="badge bg-label-success"
                    >Completed</span
                  >
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
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> View
                        Details</a
                      >
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="./assets/mi-tv.png"
                      alt="Xiaomi"
                      height="32"
                      width="32"
                      class="me-3"
                    />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">Mi LED TV 4X</h6>
                      <small class="text-body">Xiaomi</small>
                    </div>
                  </div>
                </td>
                <td>
                  <span
                    class="badge bg-label-danger rounded-pill p-1_5 me-3"
                    ><i class="bx bx-tv bx-xs"></i
                  ></span>
                  Smart TV
                </td>
                <td>
                  <div class="text-body">
                    <span class="text-primary fw-medium">$349</span
                    >/2499
                  </div>
                  <small class="text-body">Partially Paid</small>
                </td>
                <td>
                  <span class="badge bg-label-primary"
                    >Confirmed</span
                  >
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
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> View
                        Details</a
                      >
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      src="./assets/logitech-mx.png"
                      alt="Logitech"
                      height="32"
                      width="32"
                      class="me-3"
                    />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">Logitech MX</h6>
                      <small class="text-body">Logitech</small>
                    </div>
                  </div>
                </td>
                <td>
                  <span
                    class="badge bg-label-warning rounded-pill p-1_5 me-3"
                    ><i class="bx bx-mouse bx-xs"></i
                  ></span>
                  Mouse
                </td>
                <td>
                  <div>
                    <span class="text-primary fw-medium">$89</span>
                  </div>
                  <small class="text-body">Fully Paid</small>
                </td>
                <td>
                  <span class="badge bg-label-primary"
                    >Completed</span
                  >
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
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> View
                        Details</a
                      >
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
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
    <!-- Total Balance -->
    <div class="col-lg-5 col-xxl-4">
      <div class="card h-100">
        <div
          class="card-header d-flex align-items-center justify-content-between"
        >
          <h5 class="card-title m-0 me-2">Total Balance</h5>
          <div class="dropdown">
            <button
              class="btn p-0"
              type="button"
              id="totalBalance"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i
                class="bx bx-dots-vertical-rounded bx-lg text-muted"
              ></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="totalBalance"
            >
              <a class="dropdown-item" href="javascript:void(0);"
                >Last 28 Days</a
              >
              <a class="dropdown-item" href="javascript:void(0);"
                >Last Month</a
              >
              <a class="dropdown-item" href="javascript:void(0);"
                >Last Year</a
              >
            </div>
          </div>
        </div>
        <div class="card-body pb-0" style="position: relative">
          <div class="row">
            <div class="col d-flex">
              <div class="me-3">
                <span class="badge rounded-2 bg-label-warning p-2"
                  ><i class="bx bx-wallet bx-lg text-warning"></i
                ></span>
              </div>
              <div>
                <h6 class="mb-0">$2.54k</h6>
                <small>Wallet</small>
              </div>
            </div>
            <div class="col d-flex">
              <div class="me-3">
                <span class="badge rounded-2 bg-label-secondary p-2"
                  ><i class="bx bx-dollar bx-lg text-secondary"></i
                ></span>
              </div>
              <div>
                <h6 class="mb-0">$4.2k</h6>
                <small>Paypal</small>
              </div>
            </div>
          </div>
          <div id="totalBalanceChart" style="min-height: 245px">
            <div
              id="apexcharts81arfxw4"
              class="apexcharts-canvas apexcharts81arfxw4 apexcharts-theme-light"
              style="width: 397px; height: 245px"
            >
              <svg
                id="SvgjsSvg2162"
                width="397"
                height="245"
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
                  id="SvgjsG2164"
                  class="apexcharts-inner apexcharts-graphical"
                  transform="translate(10, 20)"
                >
                  <defs id="SvgjsDefs2163">
                    <clippath id="gridRectMask81arfxw4">
                      <rect
                        id="SvgjsRect2169"
                        width="383.515625"
                        height="179.73"
                        x="-4"
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
                    <clippath id="forecastMask81arfxw4"></clippath>
                    <clippath
                      id="nonForecastMask81arfxw4"
                    ></clippath>
                    <clippath id="gridRectMarkerMask81arfxw4">
                      <rect
                        id="SvgjsRect2170"
                        width="403.515625"
                        height="203.73"
                        x="-14"
                        y="-14"
                        rx="0"
                        ry="0"
                        opacity="1"
                        stroke-width="0"
                        stroke="none"
                        stroke-dasharray="0"
                        fill="#fff"
                      ></rect>
                    </clippath>
                    <filter
                      id="SvgjsFilter2187"
                      filterUnits="userSpaceOnUse"
                      width="200%"
                      height="200%"
                      x="-50%"
                      y="-50%"
                    >
                      <feflood
                        id="SvgjsFeFlood2188"
                        flood-color="#ffab00"
                        flood-opacity="0.15"
                        result="SvgjsFeFlood2188Out"
                        in="SourceGraphic"
                      ></feflood>
                      <fecomposite
                        id="SvgjsFeComposite2189"
                        in="SvgjsFeFlood2188Out"
                        in2="SourceAlpha"
                        operator="in"
                        result="SvgjsFeComposite2189Out"
                      ></fecomposite>
                      <feoffset
                        id="SvgjsFeOffset2190"
                        dx="5"
                        dy="10"
                        result="SvgjsFeOffset2190Out"
                        in="SvgjsFeComposite2189Out"
                      ></feoffset>
                      <fegaussianblur
                        id="SvgjsFeGaussianBlur2191"
                        stdDeviation="3 "
                        result="SvgjsFeGaussianBlur2191Out"
                        in="SvgjsFeOffset2190Out"
                      ></fegaussianblur>
                      <femerge
                        id="SvgjsFeMerge2192"
                        result="SvgjsFeMerge2192Out"
                        in="SourceGraphic"
                      >
                        <femergenode
                          id="SvgjsFeMergeNode2193"
                          in="SvgjsFeGaussianBlur2191Out"
                        ></femergenode>
                        <femergenode
                          id="SvgjsFeMergeNode2194"
                          in="[object Arguments]"
                        ></femergenode>
                      </femerge>
                      <feblend
                        id="SvgjsFeBlend2195"
                        in="SourceGraphic"
                        in2="SvgjsFeMerge2192Out"
                        mode="normal"
                        result="SvgjsFeBlend2195Out"
                      ></feblend>
                    </filter>
                  </defs>
                  <line
                    id="SvgjsLine2168"
                    x1="0"
                    y1="0"
                    x2="0"
                    y2="175.73"
                    stroke="#b6b6b6"
                    stroke-dasharray="3"
                    stroke-linecap="butt"
                    class="apexcharts-xcrosshairs"
                    x="0"
                    y="0"
                    width="1"
                    height="175.73"
                    fill="#b1b9c4"
                    filter="none"
                    fill-opacity="0.9"
                    stroke-width="1"
                  ></line>
                  <g
                    id="SvgjsG2196"
                    class="apexcharts-xaxis"
                    transform="translate(0, 0)"
                  >
                    <g
                      id="SvgjsG2197"
                      class="apexcharts-xaxis-texts-g"
                      transform="translate(0, -4)"
                    >
                      <text
                        id="SvgjsText2199"
                        font-family="Public Sans"
                        x="0"
                        y="204.73"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: 'Public Sans'"
                      >
                        <tspan id="SvgjsTspan2200">Jan</tspan>
                        <title>Jan</title>
                      </text>
                      <text
                        id="SvgjsText2202"
                        font-family="Public Sans"
                        x="75.103125"
                        y="204.73"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: 'Public Sans'"
                      >
                        <tspan id="SvgjsTspan2203">Feb</tspan>
                        <title>Feb</title>
                      </text>
                      <text
                        id="SvgjsText2205"
                        font-family="Public Sans"
                        x="150.20625"
                        y="204.73"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: 'Public Sans'"
                      >
                        <tspan id="SvgjsTspan2206">Mar</tspan>
                        <title>Mar</title>
                      </text>
                      <text
                        id="SvgjsText2208"
                        font-family="Public Sans"
                        x="225.309375"
                        y="204.73"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: 'Public Sans'"
                      >
                        <tspan id="SvgjsTspan2209">Apr</tspan>
                        <title>Apr</title>
                      </text>
                      <text
                        id="SvgjsText2211"
                        font-family="Public Sans"
                        x="300.41249999999997"
                        y="204.73"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: 'Public Sans'"
                      >
                        <tspan id="SvgjsTspan2212">May</tspan>
                        <title>May</title>
                      </text>
                      <text
                        id="SvgjsText2214"
                        font-family="Public Sans"
                        x="375.51562499999994"
                        y="204.73"
                        text-anchor="middle"
                        dominant-baseline="auto"
                        font-size="13px"
                        font-weight="400"
                        fill="#a7acb2"
                        class="apexcharts-text apexcharts-xaxis-label"
                        style="font-family: 'Public Sans'"
                      >
                        <tspan id="SvgjsTspan2215">Jun</tspan>
                        <title>Jun</title>
                      </text>
                    </g>
                  </g>
                  <g id="SvgjsG2218" class="apexcharts-grid">
                    <g
                      id="SvgjsG2219"
                      class="apexcharts-gridlines-horizontal"
                      style="display: none"
                    >
                      <line
                        id="SvgjsLine2221"
                        x1="0"
                        y1="0"
                        x2="375.515625"
                        y2="0"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine2222"
                        x1="0"
                        y1="35.146"
                        x2="375.515625"
                        y2="35.146"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine2223"
                        x1="0"
                        y1="70.292"
                        x2="375.515625"
                        y2="70.292"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine2224"
                        x1="0"
                        y1="105.438"
                        x2="375.515625"
                        y2="105.438"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine2225"
                        x1="0"
                        y1="140.584"
                        x2="375.515625"
                        y2="140.584"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                      <line
                        id="SvgjsLine2226"
                        x1="0"
                        y1="175.73000000000002"
                        x2="375.515625"
                        y2="175.73000000000002"
                        stroke="#e0e0e0"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                        class="apexcharts-gridline"
                      ></line>
                    </g>
                    <g
                      id="SvgjsG2220"
                      class="apexcharts-gridlines-vertical"
                      style="display: none"
                    ></g>
                    <line
                      id="SvgjsLine2228"
                      x1="0"
                      y1="175.73"
                      x2="375.515625"
                      y2="175.73"
                      stroke="transparent"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                    <line
                      id="SvgjsLine2227"
                      x1="0"
                      y1="1"
                      x2="0"
                      y2="175.73"
                      stroke="transparent"
                      stroke-dasharray="0"
                      stroke-linecap="butt"
                    ></line>
                  </g>
                  <g
                    id="SvgjsG2171"
                    class="apexcharts-line-series apexcharts-plot-series"
                  >
                    <g
                      id="SvgjsG2172"
                      class="apexcharts-series"
                      seriesName="seriesx1"
                      data:longestSeries="true"
                      rel="1"
                      data:realIndex="0"
                    >
                      <path
                        id="SvgjsPath2186"
                        d="M 0 149.72196C 26.28609375 149.72196 48.81703125000001 98.40879999999999 75.103125 98.40879999999999C 101.38921875 98.40879999999999 123.92015625000002 133.5548 150.20625 133.5548C 176.49234375 133.5548 199.02328125000003 52.718999999999994 225.30937500000002 52.718999999999994C 251.59546875 52.718999999999994 274.12640625 101.92339999999999 300.4125 101.92339999999999C 326.69859375 101.92339999999999 349.22953125000004 24.60220000000001 375.515625 24.60220000000001"
                        fill="none"
                        fill-opacity="1"
                        stroke="rgba(255,171,0,0.85)"
                        stroke-opacity="1"
                        stroke-linecap="butt"
                        stroke-width="4"
                        stroke-dasharray="0"
                        class="apexcharts-line"
                        index="0"
                        clip-path="url(#gridRectMask81arfxw4)"
                        filter="url(#SvgjsFilter2187)"
                        pathTo="M 0 149.72196C 26.28609375 149.72196 48.81703125000001 98.40879999999999 75.103125 98.40879999999999C 101.38921875 98.40879999999999 123.92015625000002 133.5548 150.20625 133.5548C 176.49234375 133.5548 199.02328125000003 52.718999999999994 225.30937500000002 52.718999999999994C 251.59546875 52.718999999999994 274.12640625 101.92339999999999 300.4125 101.92339999999999C 326.69859375 101.92339999999999 349.22953125000004 24.60220000000001 375.515625 24.60220000000001"
                        pathFrom="M -1 246.022L -1 246.022L 75.103125 246.022L 150.20625 246.022L 225.30937500000002 246.022L 300.4125 246.022L 375.515625 246.022"
                      ></path>
                      <g
                        id="SvgjsG2173"
                        class="apexcharts-series-markers-wrap"
                        data:realIndex="0"
                      >
                        <g
                          id="SvgjsG2175"
                          class="apexcharts-series-markers"
                          clip-path="url(#gridRectMarkerMask81arfxw4)"
                        >
                          <circle
                            id="SvgjsCircle2176"
                            r="6"
                            cx="0"
                            cy="149.72196"
                            class="apexcharts-marker no-pointer-events wbpdjqnifk"
                            stroke="transparent"
                            fill="transparent"
                            fill-opacity="1"
                            stroke-width="4"
                            stroke-opacity="0.9"
                            rel="0"
                            j="0"
                            index="0"
                            default-marker-size="6"
                          ></circle>
                          <circle
                            id="SvgjsCircle2177"
                            r="6"
                            cx="75.103125"
                            cy="98.40879999999999"
                            class="apexcharts-marker no-pointer-events wuccsuvzxg"
                            stroke="transparent"
                            fill="transparent"
                            fill-opacity="1"
                            stroke-width="4"
                            stroke-opacity="0.9"
                            rel="1"
                            j="1"
                            index="0"
                            default-marker-size="6"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG2178"
                          class="apexcharts-series-markers"
                          clip-path="url(#gridRectMarkerMask81arfxw4)"
                        >
                          <circle
                            id="SvgjsCircle2179"
                            r="6"
                            cx="150.20625"
                            cy="133.5548"
                            class="apexcharts-marker no-pointer-events wyytxkzfb"
                            stroke="transparent"
                            fill="transparent"
                            fill-opacity="1"
                            stroke-width="4"
                            stroke-opacity="0.9"
                            rel="2"
                            j="2"
                            index="0"
                            default-marker-size="6"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG2180"
                          class="apexcharts-series-markers"
                          clip-path="url(#gridRectMarkerMask81arfxw4)"
                        >
                          <circle
                            id="SvgjsCircle2181"
                            r="6"
                            cx="225.30937500000002"
                            cy="52.718999999999994"
                            class="apexcharts-marker no-pointer-events wqpbr0p0c"
                            stroke="transparent"
                            fill="transparent"
                            fill-opacity="1"
                            stroke-width="4"
                            stroke-opacity="0.9"
                            rel="3"
                            j="3"
                            index="0"
                            default-marker-size="6"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG2182"
                          class="apexcharts-series-markers"
                          clip-path="url(#gridRectMarkerMask81arfxw4)"
                        >
                          <circle
                            id="SvgjsCircle2183"
                            r="6"
                            cx="300.4125"
                            cy="101.92339999999999"
                            class="apexcharts-marker no-pointer-events wj70js32w"
                            stroke="transparent"
                            fill="transparent"
                            fill-opacity="1"
                            stroke-width="4"
                            stroke-opacity="0.9"
                            rel="4"
                            j="4"
                            index="0"
                            default-marker-size="6"
                          ></circle>
                        </g>
                        <g
                          id="SvgjsG2184"
                          class="apexcharts-series-markers"
                          clip-path="url(#gridRectMarkerMask81arfxw4)"
                        >
                          <circle
                            id="SvgjsCircle2185"
                            r="8"
                            cx="375.515625"
                            cy="24.60220000000001"
                            class="apexcharts-marker no-pointer-events wsvza7ljb"
                            stroke="#ffab00"
                            fill="#ffffff"
                            fill-opacity="1"
                            stroke-width="4"
                            stroke-opacity="0.9"
                            rel="5"
                            j="5"
                            index="0"
                            default-marker-size="8"
                          ></circle>
                        </g>
                      </g>
                    </g>
                    <g
                      id="SvgjsG2174"
                      class="apexcharts-datalabels"
                      data:realIndex="0"
                    ></g>
                  </g>
                  <line
                    id="SvgjsLine2229"
                    x1="0"
                    y1="0"
                    x2="375.515625"
                    y2="0"
                    stroke="#b6b6b6"
                    stroke-dasharray="0"
                    stroke-width="1"
                    stroke-linecap="butt"
                    class="apexcharts-ycrosshairs"
                  ></line>
                  <line
                    id="SvgjsLine2230"
                    x1="0"
                    y1="0"
                    x2="375.515625"
                    y2="0"
                    stroke-dasharray="0"
                    stroke-width="0"
                    stroke-linecap="butt"
                    class="apexcharts-ycrosshairs-hidden"
                  ></line>
                  <g
                    id="SvgjsG2231"
                    class="apexcharts-yaxis-annotations"
                  ></g>
                  <g
                    id="SvgjsG2232"
                    class="apexcharts-xaxis-annotations"
                  ></g>
                  <g
                    id="SvgjsG2233"
                    class="apexcharts-point-annotations"
                  ></g>
                  <rect
                    id="SvgjsRect2234"
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
                    id="SvgjsRect2235"
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
                  id="SvgjsRect2167"
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
                  id="SvgjsG2216"
                  class="apexcharts-yaxis"
                  rel="0"
                  transform="translate(-8, 0)"
                >
                  <g
                    id="SvgjsG2217"
                    class="apexcharts-yaxis-texts-g"
                  ></g>
                </g>
                <g
                  id="SvgjsG2165"
                  class="apexcharts-annotations"
                ></g>
              </svg>
              <div
                class="apexcharts-legend"
                style="max-height: 122.5px"
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
                    style="background-color: rgb(255, 171, 0)"
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
                <div class="apexcharts-yaxistooltip-text"></div>
              </div>
            </div>
          </div>
          <div class="resize-triggers">
            <div class="expand-trigger">
              <div style="width: 446px; height: 322px"></div>
            </div>
            <div class="contract-trigger"></div>
          </div>
        </div>
        <hr class="m-0" />
        <div class="card-footer">
          <div class="d-flex justify-content-between">
            <small class="text-body"
              >You have done 57.6% more sales.<br />Check your new
              badge in your profile.</small
            >
            <div>
              <span class="badge bg-label-warning rounded-2 p-2"
                ><i
                  class="bx bx-chevron-right bx-md text-warning"
                ></i
              ></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Total Balance -->
  </div>
  @endsection